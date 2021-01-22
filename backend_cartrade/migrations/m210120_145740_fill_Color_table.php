<?php

use yii\db\Migration;

/**
 * Class m210120_145740_fill_Color_table
 */
class m210120_145740_fill_Color_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%Color}}', ['id', 'name'],
        [
            [1, 'Белый'],
            [2, 'Серебристый'],
            [3, 'Бежевый'],
            [4, 'Желтый'],
            [5, 'Золотистый'],
            [6, 'Оранжевый'],
            [7, 'Розовый'],
            [8, 'Желтый'],
            [9, 'Красный'],
            [10, 'Пурпурный'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("SET foreign_key_checks = 0;");
        $this->truncateTable('{{%Color}}');
        $this->execute("SET foreign_key_checks = 1;");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210120_145740_fill_Color_table cannot be reverted.\n";

        return false;
    }
    */
}
