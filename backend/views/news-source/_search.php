<?php

/**
 * Team: 明天上线队
 * Created by 刘宇轩.
 * 后台新闻来源搜索页面
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\NewsSourceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-source-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'source_name') ?>

    <?= $form->field($model, 'source_introduction') ?>

    <?= $form->field($model, 'source_twitter') ?>

    <?= $form->field($model, 'source_facebook') ?>

    <?= $form->field($model, 'source_instagram') ?>

    <?php // echo $form->field($model, 'source_photo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
