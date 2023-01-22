<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\NewsSource */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-source-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'source_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source_introduction')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'source_twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source_facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source_instagram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source_photo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
