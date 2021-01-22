<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Ad}}`.
 */
class m210120_142024_create_Ad_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Ad}}', [
            'id' => $this->primaryKey(),
            'combinationId' => $this->integer()->comment('Комбинация'),
            'year' => $this->date()->notNull()->comment('Год'),
            'price' => $this->bigInteger()->notNull()->comment('Цена'),
            'odometer' => $this->integer()->notNull()->comment('Пробег'),
            'colorId' => $this->integer()->comment('Цвет'),
            'countOwners' => $this->integer()->notNull()->comment('Количество владельцев'),
            'createdAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата изменения')
        ]);
        $this->addForeignKey('fk_Ad_combinationId', '{{%Ad}}', 'combinationId',
                                                    '{{%Combination}}', 'id', 'SET NULL');
        $this->addForeignKey('fk_Ad_colorId', '{{%Ad}}', 'colorId',
                                                    '{{%Color}}', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_Ad_colorId', '{{%Ad}}');
        $this->dropForeignKey('fk_Ad_combinationId', '{{%Ad}}');
        $this->dropTable('{{%Ad}}');
    }    
}
