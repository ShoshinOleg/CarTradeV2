<?php

use yii\db\Migration;

/**
 * Class m210120_142313_fill_BodyType_table
 */
class m210120_142313_fill_BodyType_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%BodyType}}', ['id', 'name'],
        [
           [1, 'Седан'],
           [2, 'Универсал 5 дв.'],
           [3, 'Лифтбек'],
           [4, 'Внедорожник 5 дв.'],
           [5, 'Хэтчбек 5 дв.'],
           [6, 'Минивэн'],
           [7, 'Пикап'],
           [8, 'Пикап Двойная кабина'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("SET foreign_key_checks = 0;");
        $this->truncateTable('{{%BodyType}}');
        $this->execute("SET foreign_key_checks = 1;");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210120_142313_fill_BodyType_table cannot be reverted.\n";

        return false;
    }
    */
}
