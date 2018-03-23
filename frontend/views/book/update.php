<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\demo\Addressbook */
//echo "<pre>";
//var_dump($model);
$this->title = "更新通讯录";
$this->params['breadcrumbs'][] = ['label' => 'Addressbooks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="addressbook-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
