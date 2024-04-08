<?php
/** @var $model */
<<<<<<< HEAD
?>
<div class="forum">
    <div class="form_wrapper">
        <h1><?= $this->title ?></h1>
        <?php $form = ActiveForm:: begin([
=======

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="form">
    <div class="form__wrapper">
        <h1><?= $this->title ?></h1>
        <?php $form = ActiveForm::begin([
>>>>>>> origin/master
            'class' => 'form',
            'fieldConfig' => [
                'template' => "{label}\n{input}\n{error}",
                'labelOptions' => ['class' => 'label'],
                'inputOptions' => ['class' => 'input'],
                'errorOptions' => ['class' => 'error']
            ]
        ]) ?>
        <?= $form->field($model, 'title')->textInput() ?>
<<<<<<< HEAD
        <?= $form->field($model, 'desc')->textarea(['value' => '', 'row' => 10, 'cols' => 30, 'style' => 'resize:none;']) ?>
        <?= Html::submitButton('Создать раздел', ['class' => 'btn']) ?>
=======
        <?= $form->field($model, 'desc')->textarea(['value' => '', 'rows' => 10, 'cols' => 30, 'style' => 'resize:none;']) ?>
        <?= Html::submitButton('Создать раздел', ['class' => 'btn']) ?>

>>>>>>> origin/master
        <?php ActiveForm::end() ?>
    </div>
</div>
