<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%AdImage}}`.
 */
class m210123_184934_create_AdImage_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%AdImage}}', [
            'id' => $this->primaryKey(),
            'adId' => $this->integer()->comment('Объявление'),
            'picNumber' => $this->integer()->comment('Номер картинки в объявлении')
        ]);
        $this->addForeignKey('fk_AdImage_adId', '{{%AdImage}}', 'adId',
                                                '{{%Ad}}'     , 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_AdImage_adId', '{{%AdImage}}');
        $this->dropTable('{{%AdImage}}');
    }
}
