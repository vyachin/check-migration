<?php

use yii\db\Migration;

/**
 * Class m210603_101204_create_table_table1
 */
class m210603_101204_create_table_table1 extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            'table1',
            [
                'id' => $this->primaryKey(),
            ]
        );
    }

    public function safeDown()
    {
        $this->dropTable('table1');
    }
}
