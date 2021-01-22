<?php

use yii\db\Migration;

/**
 * Class m210120_143848_fill_TransmissionType_table
 */
class m210120_143848_fill_TransmissionType_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%TransmissionType}}', ['id', 'name'],
        [
            [1, 'Механическая'], 
            [2, 'Автомат'],
            [3, 'Робот'],
            [4, 'Вариатор'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("SET foreign_key_checks = 0;");
        $this->truncateTable('{{%TransmissionType}}');
        $this->execute("SET foreign_key_checks = 1;");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210120_143848_fill_TransmissionType_table cannot be reverted.\n";

        return false;
    }
    */
}
