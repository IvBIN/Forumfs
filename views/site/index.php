<?php
/**@var $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $file = ActiveForm::begin(['options' => [
    'enctype' => 'multipart/form-data'
]]) ?>
<div class="file">
    <?= $file->field($model, 'file')->fileInput(['multiple' => true]) ?>
</div>

<?= Html::submitButton('Загрузить') ?>

<?php ActiveForm::end() ?>
