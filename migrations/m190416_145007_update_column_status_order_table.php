<?php

use yii\db\Migration;

/**
 * Class m190416_145007_update_column_status_order_table
 */
class m190416_145007_update_column_status_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%orders}}', 'status', $this->smallInteger()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('{{%orders}}', 'status', $this->integer());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190416_145007_update_column_status_order_table cannot be reverted.\n";

        return false;
    }
    */
}
