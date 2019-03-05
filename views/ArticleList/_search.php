<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArticleListSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-list-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'sid') ?>

    <?= $form->field($model, 'catid') ?>

    <?= $form->field($model, 'topic') ?>

    <?= $form->field($model, 'aid') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'keywords') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'counter') ?>

    <?php // echo $form->field($model, 'mview') ?>

    <?php // echo $form->field($model, 'collectnum') ?>

    <?php // echo $form->field($model, 'good') ?>

    <?php // echo $form->field($model, 'bad') ?>

    <?php // echo $form->field($model, 'score') ?>

    <?php // echo $form->field($model, 'ratings') ?>

    <?php // echo $form->field($model, 'score_story') ?>

    <?php // echo $form->field($model, 'ratings_story') ?>

    <?php // echo $form->field($model, 'pollid') ?>

    <?php // echo $form->field($model, 'queueid') ?>

    <?php // echo $form->field($model, 'inputtime') ?>

    <?php // echo $form->field($model, 'updatetime') ?>

    <?php // echo $form->field($model, 'thumb') ?>

    <?php // echo $form->field($model, 'source') ?>

    <?php // echo $form->field($model, 'sourceid') ?>

    <?php // echo $form->field($model, 'premium') ?>

    <?php // echo $form->field($model, 'url_show') ?>

    <?php // echo $form->field($model, 'label') ?>

    <?php // echo $form->field($model, 'url') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
