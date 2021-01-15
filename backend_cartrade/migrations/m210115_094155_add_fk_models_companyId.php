<?php

use yii\db\Migration;

/**
 * Class m210115_094155_add_fk_models_companyId
 */
class m210115_094155_add_fk_models_companyId extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk_models_companyId',  '{{%models}}', 'companyId', '{{%companies}}', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_models_companyId',  '{{%models}}');

        echo "m210115_094155_add_fk_models_companyId cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_094155_add_fk_models_companyId cannot be reverted.\n";

        return false;
    }
    */
}
