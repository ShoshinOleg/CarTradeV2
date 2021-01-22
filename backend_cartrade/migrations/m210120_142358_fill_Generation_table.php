<?php

use yii\db\Migration;

/**
 * Class m210120_142358_fill_Generation_table
 */
class m210120_142358_fill_Generation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%Generation}}', ['id', 'name', 'modelId', 'startManufacturing', 'endManufacturing'],
        [
            [1, 'VII (G30/G31)', 1 , 2016, 2020], //BMW 5 
            [2, 'VI (F10/F11/F07) Рестайлинг', 1 , 2013, 2017], //BMW 5 
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("SET foreign_key_checks = 0;");
        $this->truncateTable('{{%Generation}}');
        $this->execute("SET foreign_key_checks = 1;");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210120_142358_fill_Generation_table cannot be reverted.\n";

        return false;
    }
    */
}
