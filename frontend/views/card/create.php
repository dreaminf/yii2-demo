<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\card\Cardinfo */

$this->title = 'Create Cardinfo';
$this->params['breadcrumbs'][] = ['label' => 'Cardinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cardinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
