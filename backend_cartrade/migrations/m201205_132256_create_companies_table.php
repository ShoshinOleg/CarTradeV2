<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%companies}}`.
 */
class m201205_132256_create_companies_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%companies}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(128)->notNull()->comment('Название')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%companies}}');
    }
}
