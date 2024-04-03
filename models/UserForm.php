<?php

namespace app\models;

use yii\base\Model as Model;

class UserForm extends Model
{
    public $login;
    public $password;
    public $_user = false;

    public function attributeLabels()
    {
        return [
            'login' => 'Логин',
            'password' => 'Пароль'
        ];
    }

    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
            ['password', 'validatePassword'],
        ];
    }

    public function validatePassword($attributes, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attributes, "Ошибка в логине или пароле");
            }
        }
    }

    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findUserBylogin($this->login);
        };
        return $this->_user;
    }

    public function login()
    {
        if ($this->validate()) {
            return \Yii::$app->user->login($this->getUser());
        }
        return false;
    }
}