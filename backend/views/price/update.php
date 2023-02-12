<?php

/**
 * Team: 明天上线队
 * Created by 郑向鹏.
 * 后台物价更新页面
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Price */

$this->title = 'Update Price: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Price', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<?= $this->render('_form', [
    'model' => $model,
    'to' => 'update'
]) ?>
