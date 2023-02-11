<?php

/**
 * Team: 明天上线队
 * Created by 刘宇轩.
 * 后台新闻创建页面
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\News */

$this->title = 'Create News';
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>



<?= $this->render('_form', [
    'model' => $model,
    'to' => 'create'
]) ?>
