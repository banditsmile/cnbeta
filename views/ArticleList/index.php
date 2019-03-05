<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Article Lists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-list-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Article List', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sid',
            'catid',
            'topic',
            'aid',
            //'user_id',
            //'title',
            //'keywords',
            //'comments',
            //'counter',
            //'mview',
            //'collectnum',
            //'good',
            //'bad',
            //'score',
            //'ratings',
            //'score_story',
            //'ratings_story',
            //'pollid',
            //'queueid',
            //'inputtime',
            //'updatetime:datetime',
            //'thumb',
            //'source',
            //'sourceid',
            //'premium',
            //'url_show:url',
            //'label',
            //'url:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
