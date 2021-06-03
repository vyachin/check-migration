<?php

use yii\db\Migration;

/**
 * Class m210603_140930_add_column_name2
 */
class m210603_140930_add_column_name2 extends Migration
{
    public function safeUp()
    {
        $this->addColumn('table1', 'name2', $this->string());
    }

    public function safeDown()
    {
        $this->dropColumn('table1', 'name2');
    }
}
