<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\articleList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sid')->textInput() ?>

    <?= $form->field($model, 'catid')->textInput() ?>

    <?= $form->field($model, 'topic')->textInput() ?>

    <?= $form->field($model, 'aid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comments')->textInput() ?>

    <?= $form->field($model, 'counter')->textInput() ?>

    <?= $form->field($model, 'mview')->textInput() ?>

    <?= $form->field($model, 'collectnum')->textInput() ?>

    <?= $form->field($model, 'good')->textInput() ?>

    <?= $form->field($model, 'bad')->textInput() ?>

    <?= $form->field($model, 'score')->textInput() ?>

    <?= $form->field($model, 'ratings')->textInput() ?>

    <?= $form->field($model, 'score_story')->textInput() ?>

    <?= $form->field($model, 'ratings_story')->textInput() ?>

    <?= $form->field($model, 'pollid')->textInput() ?>

    <?= $form->field($model, 'queueid')->textInput() ?>

    <?= $form->field($model, 'inputtime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updatetime')->textInput() ?>

    <?= $form->field($model, 'thumb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sourceid')->textInput() ?>

    <?= $form->field($model, 'premium')->textInput() ?>

    <?= $form->field($model, 'url_show')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'label')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
