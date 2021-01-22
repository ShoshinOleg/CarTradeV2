<?php

use yii\db\Migration;

/**
 * Class m210120_150540_fill_Ad_table
 */
class m210120_150540_fill_Ad_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%Ad}}', ['id', 'combinationId', 'year', 'price', 'odometer', 'countOwners', 'colorId'],
        [
            [1, 1, '2016-01-01', 500000, 99999, 2, 1],
            [2, 2, '2017-01-01', 400000, 9999, 3, 2],
            [3, 3, '2018-01-01', 666000, 7999, 1, 3],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("SET foreign_key_checks = 0;");
        $this->truncateTable('{{%Ad}}');
        $this->execute("SET foreign_key_checks = 1;");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210120_150540_fill_Ad_table cannot be reverted.\n";

        return false;
    }
    */
}
