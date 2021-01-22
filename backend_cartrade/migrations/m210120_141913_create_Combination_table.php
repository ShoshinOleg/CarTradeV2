<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Combination}}`.
 */
class m210120_141913_create_Combination_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Combination}}', [
            'id' => $this->primaryKey(),
            'generationId' => $this->integer()->comment('Поколение'),
            'bodyTypeId' => $this->integer()->comment('Тип кузова'),
            'modificationId' => $this->integer()->comment('Модификация'),
            'createdAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата изменения')
        ]);
        $this->addForeignKey('fk_Combination_generationId', '{{%Combination}}', 'generationId',
                            '{{%Generation}}', 'id', 'SET NULL');
        $this->addForeignKey('fk_Combination_bodyTypeId', '{{%Combination}}', 'bodyTypeId',
                            '{{%BodyType}}', 'id', 'SET NULL');
        $this->addForeignKey('fk_Combination_modificationId', '{{%Combination}}', 'modificationId',
                            '{{%Modification}}', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_Combination_modificationId', '{{%Combination}}');
        $this->dropForeignKey('fk_Combination_bodyTypeId', '{{%Combination}}');
        $this->dropForeignKey('fk_Combination_generationId', '{{%Combination}}');
        $this->dropTable('{{%Combination}}');
    }
}
