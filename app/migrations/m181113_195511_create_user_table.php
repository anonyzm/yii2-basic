<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m181113_195511_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255),
            'password' => $this->string(255),
            'access_token' => $this->string(255),
            'auth_key' => $this->string(255),
        ]);

        $this->createIndex('idx-username', 'user', 'username');
        $this->createIndex('idx-access_token', 'user', 'access_token');
        $this->createIndex('idx-auth_key', 'user', 'auth_key');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
