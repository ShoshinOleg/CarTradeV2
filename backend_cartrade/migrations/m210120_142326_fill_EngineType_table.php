<?php

use yii\db\Migration;

/**
 * Class m210120_142326_fill_EngineType_table
 */
class m210120_142326_fill_EngineType_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%EngineType}}', ['id', 'name'],
        [
           [1, 'Бензин'],
           [2, 'Дизель'],
           [3, 'Электро'],
           [4, 'Гибрид'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("SET foreign_key_checks = 0;");
        $this->truncateTable('{{%EngineType}}');
        $this->execute("SET foreign_key_checks = 1;");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210120_142326_fill_EngineType_table cannot be reverted.\n";

        return false;
    }
    */
}
