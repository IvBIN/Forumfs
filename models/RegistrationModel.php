<?php

namespace app\models;

use app\repository\UsersRepository;
use yii\base\Model as Model;

class RegistrationModel extends Model
{
    public $login;
    public $password;
    public $passwordRepeat;

    public function rules()
    {
        return [
            [['login', 'password', 'passwordRepeat'], 'required'],
            ['passwordRepeat', 'compare', 'compareAttribute' => 'password'],
            ['login', 'validateLogin']
        ];
    }

    public function validateLogin($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = UsersRepository::getUserByLogin($this->login);
            if ($user) {
                $this->addError($attribute, 'Такой пользователь уже существует!');
            }
        }
    }

    public function attributeLabels()
    {
        return [
          'login' => 'Логин',
          'password' => 'Пароль',
          'passwordRepeat' => 'Повторенный пароль'
        ];
    }
}