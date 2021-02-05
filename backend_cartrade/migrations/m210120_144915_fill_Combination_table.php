<?php

use yii\db\Migration;

/**
 * Class m210120_144915_fill_Combination_table
 */
class m210120_144915_fill_Combination_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%Combination}}', ['id', 'generationId', 'bodyTypeId', 'modificationId'],
        [
            [1, 1, 2, 1], //BMW - 5 - VII (G30/G31) - 530i 2.0 252hp AT 2016-2020
            [2, 1, 1, 2], //BMW - 5 - VII (G30/G31) - 530i 2.0 249hp AT 2016-2020
            [3, 1, 1, 3], //BMW - 5 - VII (G30/G31) - 540i 3.0 340hp AT 2016-2020

            //VII (F10/F11/F07) рестайлинг
            [4, 2, 1, 4], //BMW - 5 - VII (F10/F11/F07) рестайлинг - 520Li 2.0 184hp AT 2013-2017
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("SET foreign_key_checks = 0;");
        $this->truncateTable('{{%Combination}}');
        $this->execute("SET foreign_key_checks = 1;");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210120_144915_fill_Combination_table cannot be reverted.\n";

        return false;
    }
    */
}
