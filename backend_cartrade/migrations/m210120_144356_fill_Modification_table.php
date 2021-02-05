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
            [1, '530i 2.0 AT', 1, 1, 2, 2016, 2020], //BMW 5 530i 2.0 252hp AT 2016-2020 (Задний привод) 'VII (G30/G31)'
            [2, '530i 2.0 AT', 1, 2, 2, 2016, 2020], //BMW 5 530i 2.0 249hp AT 2016-2020 (Задний привод) 'VII (G30/G31)'
            [3, '530i 2.0 AT', 1, 3, 2, 2016, 2020], //BMW 5 540i 3.0 340hp AT 2016-2020 (Задний привод) 'VII (G30/G31)'

            [4, '520Li 2.0 AT', 1, 6, 2, 2013, 2017], //BMW 5 520Li 2.0 184hp AT 2013-2017 (Задний привод) 'VII (F10/F11/F07) рестайлинг'
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
