<?php
<<<<<<< HEAD
?>

<div>
    <?= $form->field($model, 'login')->textInput() ?>
    <?= $form->field($model, 'login')->textInput() ?>
=======
/** @var $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="form">
    <div class="form_wrapper">
        <h1><?= $this->title ?></h1>
        <?php $form = ActiveForm::begin([
            'fieldConfig' => [
                'template' => "{label}\n{input}\n{error}",
                'labelOptions' => ['class' => 'label'],
                'inputOptions' => ['class' => 'input'],
                'errorOptions' => ['class' => 'error'],
            ]
        ]) ?>
        <div>
            <?= $form->field($model, 'login')->textInput() ?>
        </div>
        <div>
            <?= $form->field($model, 'password')->passwordInput() ?>
        </div>
        <div>
            <?= $form->field($model, 'passwordRepeat')->passwordInput() ?>
        </div>

        <?= Html::submitButton('Регистрация', ['class' => 'btn']) ?>
        <?= ActiveForm::end(); ?>
    </div>
>>>>>>> origin/master
</div>
