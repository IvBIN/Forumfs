<?php

namespace app\entity;

use yii\web\IdentityInterface;

/**
 *Users
 * @property integer id ID пользователя
 * @property string login логин пользователя
 * @property string password пароль пользователя
 * @property string photo аватар пользователя
 *
 */
*/

class Users extends \yii\db\ActiveRecord implements IdentityInterface
{
    public static function findIdentity($id)
    {
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }

    public function getId()
    {
        // TODO: Implement getId() method.
    }

    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }

    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }
}