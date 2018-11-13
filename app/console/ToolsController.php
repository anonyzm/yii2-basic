<?php
namespace app\console;

use app\models\User;
use yii\console\Controller;
use yii\helpers\Console;

class ToolsController extends Controller
{
    /**
     * Creating default user
     * @throws \yii\base\Exception
     */
    public function actionCreateDefaultUser($username = 'admin')
    {
        $password = \Yii::$app->params['adminPassword'];
        $admin = new User();
        $admin->id = 1;
        $admin->username = $username;
        $admin->password = \Yii::$app->security->generatePasswordHash($password);
        if($admin->save()) {
            Console::output('Default user `admin` created');
            Console::output("Password: {$password}");
        }
        else {
            Console::output('Error creating default user!');
        }
    }

    /**
     * Reset user password
     * @param $password
     * @param $user_id
     * @throws \yii\base\Exception
     */
    public function actionResetUserPassword($user_id, $password)
    {
        $admin = User::findOne($user_id);
        if(!$admin) {
            Console::output('User #{$user_id} not found, try using `create-admin-password`!');
            return;
        }
        $admin->password = \Yii::$app->security->generatePasswordHash($password);
        if($admin->save()) {
            Console::output("Password for user `{$admin->username}` changed to: {$password}");
        }
        else {
            Console::output("Error reseting `{$admin->username}` password!");
        }
    }
}
