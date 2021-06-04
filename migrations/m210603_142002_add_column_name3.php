<?php

use yii\db\Migration;

/**
 * Class m210603_142002_add_column_name3
 */
class m210603_142002_add_column_name3 extends Migration
{
    public function safeUp()
    {
        $this->addColumn('table1', 'name3', $this->string());
    }

    public function safeDown()
    {
        $this->dropColumn('table1', 'name3');
    }
}
