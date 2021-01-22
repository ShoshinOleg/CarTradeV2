<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Color}}`.
 */
class m210120_141945_create_Color_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Color}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->comment('Название'),
            'createdAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата изменения')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Color}}');
    }
}
