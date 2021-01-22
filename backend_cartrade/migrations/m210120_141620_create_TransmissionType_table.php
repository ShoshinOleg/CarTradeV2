<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%TransmissionType}}`.
 */
class m210120_141620_create_TransmissionType_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%TransmissionType}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(128)->notNull()->comment('Название'),
            'createdAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата изменения')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%TransmissionType}}');
    }
}
