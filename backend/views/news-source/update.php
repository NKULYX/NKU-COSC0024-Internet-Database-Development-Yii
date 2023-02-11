<?php

/**
 * Team: 明天上线队
 * Created by 刘宇轩.
 * 后台新闻来源更新页面
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\NewsSource */

$this->title = 'Update News Source: ' . $model->source_name;
$this->params['breadcrumbs'][] = ['label' => 'News Sources', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->source_name, 'url' => ['view', 'id' => $model->source_name]];
$this->params['breadcrumbs'][] = 'Update';
?>

<?= $this->render('_form', [
    'model' => $model,
    'to' => 'update'
]) ?>
