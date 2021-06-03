<?php


namespace app\components;


use Yii;
use yii\console\controllers\MigrateController;
use yii\db\Command;

class MigrateCommand extends MigrateController
{
    private array $changeFiles = [];

    public function init(): void
    {
        parent::init();
        $this->changeFiles = preg_split('#\s+#', $_SERVER['CHANGE_FILES'] ?? '');
    }

    protected function createMigration($class)
    {
        $this->includeMigrationFile($class);
        if ($this->checkMigrationName($class)) {
            $this->db->commandClass = FakeDatabaseCommand::class;
        } else {
            $this->db->commandClass = Command::class;
        }
        return Yii::createObject(
            [
                'class' => $class,
                'db' => $this->db,
                'compact' => $this->compact,
            ]
        );
    }

    private function checkMigrationName(string $class): bool
    {
        foreach ($this->changeFiles as $migration) {
            if (strpos($migration, $class) !== false) {
                return true;
            }
        }
        return false;
    }
}