<?php

/**
 * Team: 明天上线队
 * Created by 郑向鹏.
 * 后台图册管理主页
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Gallery */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gallery';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Gallery', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'gallery_name:ntext',
            'details:ntext',
            'introduction:ntext',
            'title:ntext',
            'weight:ntext',
            'gallery_time:ntext',
            'path',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
