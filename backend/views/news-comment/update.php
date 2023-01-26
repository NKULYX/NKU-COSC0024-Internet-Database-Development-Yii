<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\NewsComment */

$this->title = 'Update News Comment: ' . $model->comment_id;
$this->params['breadcrumbs'][] = ['label' => 'News Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->comment_id, 'url' => ['view', 'id' => $model->comment_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="news-comment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
