<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Engine}}`.
 */
class m210118_182711_create_Engine_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Engine}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull()->comment('Название'),
            'volume' => $this->decimal(3,1)->notNull()->comment('Объем'),
            'engineTypeId' => $this->integer()->comment('Тип двигателя'),
            'power' => $this->integer()->comment('Мощность'),
            'createdAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата изменения')
        ]);
        $this->addForeignKey('fk_Engine_engineTypeId', '{{%Engine}}', 'engineTypeId', '{{%EngineType}}', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_Engine_engineTypeId', '{{%Engine}}');
        $this->dropTable('{{%Engine}}');
    }
}
