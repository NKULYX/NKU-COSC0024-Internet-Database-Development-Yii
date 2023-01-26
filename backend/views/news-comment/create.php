<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\NewsComment */

$this->title = 'Create News Comment';
$this->params['breadcrumbs'][] = ['label' => 'News Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-comment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
