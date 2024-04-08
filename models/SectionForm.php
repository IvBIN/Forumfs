<?php

namespace app\models;

<<<<<<< HEAD
use yii\base\Model as Model;
=======
use yii\base\Model;
>>>>>>> origin/master

class SectionForm extends Model
{
    public $title;
<<<<<<< HEAD
    public $desc;
=======
    public #desc;
>>>>>>> origin/master

    public function rules()
    {
        return [
<<<<<<< HEAD
            [['title', 'desc'], 'required']
=======
          [['title','desc'], 'required']
>>>>>>> origin/master
        ];
    }

    public function attributeLabels()
    {
        return [
<<<<<<< HEAD
            'title' => 'Название',
            'desc' => 'Описание',
=======
          'title' => 'Название',
          'desc' => 'Описание'
>>>>>>> origin/master
        ];
    }
}