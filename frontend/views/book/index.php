<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\demo\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '通讯录';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="addressbook-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加通讯录', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'id',
            [
                    'attribute'=>'name',
                'value'=>function($model,$key,$index,$column){
                    return Html::a($model->name,['book/view','id'=>$key]);
                },
                'format'=>'raw',
            ],
            'age',
            [
                  'attribute'=>'sex',
                'value'=>function($model,$key,$index,$column){
                        return $model->sex==1?'男':'女';
                }
            ],
            'birthday',
            'holly',
            'email:email',
            'address',
            'phone',
            'qq',
            'adddatetime:datetime',
            'updatetime:datetime',
            'info:ntext',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
