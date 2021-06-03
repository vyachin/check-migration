<?php

use yii\db\Migration;

/**
 * Class m210603_101604_add_column_table1_name
 */
class m210603_101604_add_column_table1_name extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('table1', 'name', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('table1', 'name');
    }
}
