<?php

namespace app\controllers;

use app\models\MessageForm;
use app\models\SectionForm;
use app\repository\ForumRepository;
use Yii;
use yii\web\Controller;

class ForumController extends Controller
{
    public function actionIndex()
    {
        $this->view->title = "Главная страница";
        return $this->render("index", [
            'sections' => ForumRepository::getSections()
        ]);
    }

    public function actionSubsections()
    {
        $title = ForumRepository::getSectionTitle(Yii::$app->request->get('id'));
        $this->view->title = $title;
        return $this->render("subsections", [
            'subsections' => ForumRepository::getSubSections(Yii::$app->request->get())
        ]);
    }

    public function actionCreateSection()
    {
        $this->view->title = 'Создание раздела';
        $model = new SectionForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            ForumRepository::createSection(
                $model->title,
                $model->description
            );
            return $this->goHome();
        }
        return $this->render("createSection", [
            'model' => $model
        ]);
    }

    public function actionCreateSubsection()
    {
        $this->view->title = 'Создание подраздела';
        $model = new SectionForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            ForumRepository::createSubSection(
                $model->title,
                $model->description,
                Yii::$app->request->get('id')
            );
            return $this->goHome();
        }
        return $this->render("createSubsection", [
            'model' => $model
        ]);
    }

    public function actionTopics()
    {
        $title = ForumRepository::getSubSectionTitle(Yii::$app->request->get('id'));
        $this->view->title = $title;
        $topics = ForumRepository::getTopics(Yii::$app->request->get('id'));
        return $this->render("topics", ['topics' => $topics]);
    }

    public function actionCreateTopic()
    {
        $this->view->title = "Темы";
        $model = new SectionForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            ForumRepository::createTopic(
                $model->title,
                $model->description,
                Yii::$app->request->get('id'),
                Yii::$app->user->id
            );
            return $this->goHome();
        }
        return $this->render("createTopics", [
            'model' => $model
        ]);
    }

    public function actionMessages()
    {
        $title = ForumRepository::getTopicsTitle(Yii::$app->request->get('id'));
        $this->view->title = $title;
        $messages = ForumRepository::getMessages(Yii::$app->request->get('id'));
        $model = new MessageForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            ForumRepository::createMessage(
                $model->title,
                Yii::$app->request->get('id'),
                Yii::$app->user->id
            );
        }
        return $this->render("messages", [
            'messages' => $messages,
            'model' => $model
        ]);
    }
}