<?php

namespace app\controllers;
use app\repository\ForumRepository;

class ForumController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->view->title = 'Главная страница';
        return $this->render("index", [
            'sections' => ForumRepository::getSections()
        ]);
    }

    public function actionCreateSection()
    {
        $this->view->title = 'Создание раздела';
        $model = new SectionForm();
        if ($model->load(Yii::$app->request->post() && $model->validate())) {
            ForumRepository::createSection(
                $model->title,
                $model->desc
            );
            return $this->goHome();
        }
        return $this->render('createSection', [
            'model' => $model
        ]);
    }
}