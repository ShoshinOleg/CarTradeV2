<?php

use yii\db\Migration;

/**
 * Class m210114_175749_add_timestamps_for_companies_and_models_tables
 */
class m210114_175749_add_timestamps_for_companies_and_models_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('companies', 'createdAt', $this->dateTime()->notNull()->comment('Дата создания'));
        $this->addColumn('companies', 'updatedAt', $this->dateTime()->comment('Дата изменения'));

        $this->addColumn('models', 'createdAt', $this->dateTime()->notNull()->comment('Дата создания'));
        $this->addColumn('models', 'updatedAt', $this->dateTime()->comment('Дата изменения'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('models', 'updatedAt');
        $this->dropColumn('models', 'createdAt');
        
        $this->dropColumn('companies', 'updatedAt');
        $this->dropColumn('companies', 'createdAt');

        echo "m210114_175749_add_timestamps_for_companies_and_models_tables cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210114_175749_add_timestamps_for_companies_and_models_tables cannot be reverted.\n";

        return false;
    }
    */
}
