<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Drivetrain}}`.
 */
class m210118_182745_create_Drivetrain_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Drivetrain}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->comment('Название'),
            'createdAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата изменения')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Drivetrain}}');
    }
}
