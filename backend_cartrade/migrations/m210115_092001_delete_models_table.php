<?php

use yii\db\Migration;

/**
 * Class m210115_092001_delete_models_table
 */
class m210115_092001_delete_models_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('{{%models}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210115_092001_delete_models_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_092001_delete_models_table cannot be reverted.\n";

        return false;
    }
    */
}
