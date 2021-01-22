<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Modification}}`.
 */
class m210120_141835_create_Modification_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Modification}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull()->comment('Название'),
            'drivetrainId' => $this->integer()->comment('Привод'),
            'engineId' => $this->integer()->comment('Двигатель'),
            'transmissionId' => $this->integer()->comment('Коробка передач'),
            'startManufacturing' => $this->smallInteger()->notNull()->comment('Начало производства'),
            'endManufacturing' => $this->smallInteger()->comment('Конец производства'),
            'createdAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата создания'),
            'updatedAt' => $this->dateTime()->defaultExpression('now()')->comment('Дата изменения')
        ]);
        $this->addForeignKey('fk_Modificaton_drivetrainId','{{%Modification}}', 'drivetrainId', '{{%Drivetrain}}', 'id', 'SET NULL');
        $this->addForeignKey('fk_Modification_engineId', '{{%Modification}}', 'engineId', '{{%Engine}}', 'id', 'SET NULL');
        $this->addForeignKey('fk_Modification_transmissionId', '{{%Modification}}', 'transmissionId', '{{%TransmissionType}}', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_Modification_transmissionId', '{{%Modification}}');
        $this->dropForeignKey('fk_Modification_engineId', '{{%Modification}}');
        $this->dropForeignKey('fk_Modificaton_drivetrainId','{{%Modification}}');
        $this->dropTable('{{%Modification}}');
    }
}
