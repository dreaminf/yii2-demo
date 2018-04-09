<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\card\Cardinfo */

$this->title = 'Update Cardinfo: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Cardinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rand_code, 'url' => ['view', 'id' => $model->rand_code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cardinfo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
