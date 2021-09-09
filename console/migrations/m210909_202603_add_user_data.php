<?php

use yii\db\Migration;

/**
 * Class m210909_202603_add_user_data
 */
class m210909_202603_add_user_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'access_token', $this->string()->defaultValue(null));

        $this->insert('{{%user}}', [
            'username' => 'admin',
            'auth_key' => 'plr3KiE1Q8oX8Dbtm5Lr9MoPazhadGa9',
            'password_hash' => '$2y$13$0mSydz270Lb.dy3gvPVjEe6KI62imSfAp8X9dB/X13tgA0NBbQKiq',
            'password_reset_token' => '',
            'access_token' => '665ac46afc562565cf39572c2a6744e7',
            'email' => 'greatseo@yandex.ru',
            'status' => 10,
            'created_at' => 1598148877,
            'updated_at' => 1598148877,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210909_202603_add_user_data cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210909_202603_add_user_data cannot be reverted.\n";

        return false;
    }
    */
}
