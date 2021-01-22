<?php

use yii\db\Migration;

/**
 * Class m210120_142214_fill_Company_table
 */
class m210120_142214_fill_Company_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%Company}}', ['id', 'name'],
         [
            [1,'BMW'],
            [2,'Mercedes'],
            [3,'Audi']
         ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("SET foreign_key_checks = 0;");
        $this->truncateTable('{{%Company}}');
        $this->execute("SET foreign_key_checks = 1;");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210120_142214_fill_Company_table cannot be reverted.\n";

        return false;
    }
    */
}
