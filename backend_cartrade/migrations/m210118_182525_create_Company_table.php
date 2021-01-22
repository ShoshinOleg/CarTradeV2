<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Company}}`.
 */
class m210118_182525_create_Company_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Company}}', [
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
        $this->dropTable('{{%Company}}');
    }
}
