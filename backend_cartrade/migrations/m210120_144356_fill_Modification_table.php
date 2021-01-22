<?php

use yii\db\Migration;

/**
 * Class m210120_144356_fill_Modification_table
 */
class m210120_144356_fill_Modification_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%Modification}}', ['id', 'name', 'drivetrainId', 'engineid', 'transmissionId', 'startManufacturing', 'endManufacturing'],
        [
            [1, '530i 2.0 AT', 1, 1, 2, 2016, 2020], //BMW 5 530i 2.0 252hp AT 2016-2020
            [2, '530i 2.0 AT', 1, 2, 2, 2016, 2020], //BMW 5 530i 2.0 249hp AT 2016-2020
            [3, '530i 2.0 AT', 1, 3, 2, 2016, 2020], //BMW 5 540i 3.0 340hp AT 2016-2020
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("SET foreign_key_checks = 0;");
        $this->truncateTable('{{%Modification}}');
        $this->execute("SET foreign_key_checks = 1;");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210120_144356_fill_Modification_table cannot be reverted.\n";

        return false;
    }
    */
}
