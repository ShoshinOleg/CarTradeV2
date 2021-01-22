<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%BodyType}}`.
 */
class m210118_182601_create_BodyType_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%BodyType}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(40)->notNull()->comment('Название'),
            'createdAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата изменения')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%BodyType}}');
    }
}
