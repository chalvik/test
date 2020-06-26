<?php

use yii\db\Migration;

/**
 * Class m200626_134629_add_admin_user
 */
class m200626_134629_add_admin_user extends Migration
{
    public function up()
    {
        $this->insert('user', [
            'username'              => 'admin',
            'auth_key'              => Yii::$app->security->generateRandomString(),
            'password_hash'         => Yii::$app->security->generatePasswordHash('123456'),
            'password_reset_token'  => Yii::$app->security->generateRandomString(),
            'email'                 => 'admin@admin.ru',
            'status'                => 10,
            'created_at'            => time(),
            'updated_at'            => time(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->delete('user', ['username' => 'admin']);
        return true;
    }

}
