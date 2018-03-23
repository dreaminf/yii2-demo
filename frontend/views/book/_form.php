<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\demo\Addressbook */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="addressbook-form" >
    <div class="row">
            <div class="col-lg-8">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'age')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'sex')->radioList(['1'=>'男','2'=>'女']) ?>
            <?= $form->field($model, 'birthday')->widget(\yii\jui\DatePicker::className(),[]) ?>
            <?= $form->field($model, 'holly')->radioList(['1'=>'阅读','2'=>'音乐','3'=>'运动']) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'address')->dropDownList(['029'=>'西安市','010'=>'北京市','0919'=>'铜川市']) ?>

            <?= $form->field($model, 'phone')?>

            <?= $form->field($model, 'qq')->textInput() ?>

            <?= $form->field($model, 'info')->textarea(['rows' => 6]) ?>

            <div class="form-group">
                <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
            </div>
    </div>
</div>
