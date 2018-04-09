<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\card\SearchCard */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cardinfo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'rand_code') ?>

    <?= $form->field($model, 'user_name') ?>

    <?= $form->field($model, 'sex') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'birth_day') ?>

    <?php // echo $form->field($model, 'id_card') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
