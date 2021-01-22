<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Model}}`.
 */
class m210118_182542_create_Model_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Model}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(128)->notNull()->comment('Название'),
            'companyId' => $this->integer()->comment('Компания'),
            'createdAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата изменения')
        ]);
        $this->addForeignKey('fk_Model_companyId',  '{{%Model}}', 'companyId', '{{%Company}}', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_Model_companyId',  '{{%Model}}');
        $this->dropTable('{{%Model}}');
    }
}
