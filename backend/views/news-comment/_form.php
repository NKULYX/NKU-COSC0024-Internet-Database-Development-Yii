<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\NewsComment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'comment_news')->textInput() ?>

    <?= $form->field($model, 'comment_user')->textInput() ?>

    <?= $form->field($model, 'comment_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'comment_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
