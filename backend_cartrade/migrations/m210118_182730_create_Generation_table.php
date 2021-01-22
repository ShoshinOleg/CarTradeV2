<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Generation}}`.
 */
class m210118_182730_create_Generation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Generation}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull()->comment('Название'),
            'modelId' => $this->integer()->comment('Модель'),
            'startManufacturing' => $this->smallInteger()->notNull()->comment('Начало производства'),
            'endManufacturing' => $this->smallInteger()->comment('Конец производства'),
            'createdAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата изменения')
        ]);
        $this->addForeignKey('fk_Generation_modelId', '{{%Generation}}', 'modelId', '{{%Model}}', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_Generation_modelId', '{{%Generation}}');
        $this->dropTable('{{%Generation}}');
    }
}
