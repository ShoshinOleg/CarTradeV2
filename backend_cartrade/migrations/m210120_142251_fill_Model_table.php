<?php

use yii\db\Migration;

/**
 * Class m210120_142251_fill_Model_table
 */
class m210120_142251_fill_Model_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%Model}}', ['id', 'name', 'companyId'],
         [
            [1, '5', 1], //BMW 5
         ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("SET foreign_key_checks = 0;");
        $this->truncateTable('{{%Model}}');
        $this->execute("SET foreign_key_checks = 1;");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210120_142251_fill_Model_table cannot be reverted.\n";

        return false;
    }
    */
}
