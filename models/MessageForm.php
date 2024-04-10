<?php

namespace app\models;

use yii\base\Model as Model;

class MessageForm extends Model
{
    public $text;

    public function rules()
    {
        return [
            ['text', 'required'],
            ['text', 'sting']
        ];
    }

    public function attributeLabels()
    {
        return [
            'text' => "Сообщение"
        ];
    }
}