<?php

use yii\db\Migration;

/**
 * Class m210120_142424_fill_Drivetrain_table
 */
class m210120_142424_fill_Drivetrain_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%Drivetrain}}', ['id', 'name'],
        [
            [1, 'Задний'], 
            [2, 'Передний'],
            [3, 'Полный'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("SET foreign_key_checks = 0;");
        $this->truncateTable('{{%Drivetrain}}');
        $this->execute("SET foreign_key_checks = 1;");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210120_142424_fill_Drivetrain_table cannot be reverted.\n";

        return false;
    }
    */
}
