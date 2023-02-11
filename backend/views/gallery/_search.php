<?php

/**
 * Team: 明天上线队
 * Created by 郑向鹏.
 * 后台图册查询页面
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\GallerySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'gallery_name') ?>

    <?= $form->field($model, 'details') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'introduction') ?>

    <?= $form->field($model, 'weight') ?>

    <?= $form->field($model, 'gallery_time') ?>

    <?php // echo $form->field($model, 'news_source') ?>

    <?php // echo $form->field($model, 'news_abstract') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
