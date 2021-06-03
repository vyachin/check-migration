<?php

use yii\db\Migration;

/**
 * Class m210603_103222_add_column_table1_status
 */
class m210603_103222_add_column_table1_status extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('table1', 'status', $this->tinyInteger());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('table1', 'status');
    }
}
