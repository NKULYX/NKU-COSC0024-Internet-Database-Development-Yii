<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\NewsSource */

$this->title = 'Create News Source';
$this->params['breadcrumbs'][] = ['label' => 'News Sources', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', [
    'model' => $model,
    'to' => 'create'
]) ?>
