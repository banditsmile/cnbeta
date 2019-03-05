<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\articleList */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Article Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-list-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'sid',
            'catid',
            'topic',
            'aid',
            'user_id',
            'title',
            'keywords',
            'comments',
            'counter',
            'mview',
            'collectnum',
            'good',
            'bad',
            'score',
            'ratings',
            'score_story',
            'ratings_story',
            'pollid',
            'queueid',
            'inputtime',
            'updatetime:datetime',
            'thumb',
            'source',
            'sourceid',
            'premium',
            'url_show:url',
            'label',
            'url:url',
        ],
    ]) ?>

</div>
