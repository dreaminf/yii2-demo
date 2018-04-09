<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\card\SearchCard */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cardinfos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cardinfo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cardinfo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rand_code',
            'user_name',
            'sex',
            'address',
            'birth_day',
            //'id_card',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
