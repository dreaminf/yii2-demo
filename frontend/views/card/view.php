<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\card\Cardinfo */

$this->title = $model->rand_code;
$this->params['breadcrumbs'][] = ['label' => 'Cardinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cardinfo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->rand_code], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->rand_code], [
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
            'rand_code',
            'user_name',
            'sex',
            'address',
            'birth_day',
            'id_card',
        ],
    ]) ?>

</div>
