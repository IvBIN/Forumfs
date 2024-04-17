<?php

namespace app\models;
class FileModel extends \yii\base\Model
{
    public $file;

    public function rules()
    {
        return [
            ['file', 'file', 'skipOnEmpty' => false]
        ];
    }
}