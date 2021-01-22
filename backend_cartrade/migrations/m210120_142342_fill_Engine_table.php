<?php

use yii\db\Migration;

/**
 * Class m210120_142342_fill_Engine_table
 */
class m210120_142342_fill_Engine_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%Engine}}', ['id', 'name', 'volume', 'power', 'engineTypeId'],
        [
            [1, '530i', 2.0, 252, 1], //BMW 5 бензин
            [2, '530i', 2.0, 249, 1], //BMW 5 бензин
            [3, '540i', 3.0, 340, 1], //BMW 5 бензин
            [4, '520d', 2.0, 190, 2], //BMW 5 дизель
            [5, '530d', 3.0, 265, 2], //BMW 5 дизель
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("SET foreign_key_checks = 0;");
        $this->truncateTable('{{%Engine}}');
        $this->execute("SET foreign_key_checks = 1;");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210120_142342_fill_Engine_table cannot be reverted.\n";

        return false;
    }
    */
}
