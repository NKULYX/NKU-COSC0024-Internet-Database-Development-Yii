<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\NewsCommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-comment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create News Comment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'comment_id',
            'comment_news',
            'comment_user',
            'comment_content:ntext',
            'comment_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
