<?php
/** @var $model */
?>
<div class="forum">
    <div class="form_wrapper">
        <h1><?= $this->title ?></h1>
        <?php $form = ActiveForm:: begin([
            'class' => 'form',
            'fieldConfig' => [
                'template' => "{label}\n{input}\n{error}",
                'labelOptions' => ['class' => 'label'],
                'inputOptions' => ['class' => 'input'],
                'errorOptions' => ['class' => 'error']
            ]
        ]) ?>
        <?= $form->field($model, 'title')->textInput() ?>
        <?= $form->field($model, 'desc')->textarea(['value' => '', 'row' => 10, 'cols' => 30, 'style' => 'resize:none;']) ?>
        <?= Html::submitButton('Создать раздел', ['class' => 'btn']) ?>
        <?php ActiveForm::end() ?>
    </div>
</div>
