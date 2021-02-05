<?php

use yii\db\Migration;

/**
 * Class m210123_190340_fill_AdImage_table
 */
class m210123_190340_fill_AdImage_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%AdImage}}', ['id', 'adId', 'picNumber'],
        [
            [1, 1, 1],
            [2, 1, 2],
            [3, 1, 3],

            [4, 2, 1],
            [5, 2, 2],
            [6, 2, 3],

            [7, 3, 1],
            [8, 3, 2],
            [9, 3, 3],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("SET foreign_key_checks = 0;");
        $this->truncateTable('{{%AdImage}}');
        $this->execute("SET foreign_key_checks = 1;");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210123_190340_fill_AdImage_table cannot be reverted.\n";

        return false;
    }
    */
}
