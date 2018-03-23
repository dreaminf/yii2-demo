<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\demo\Addressbook */

$this->title = '添加通讯录';
$this->params['breadcrumbs'][] = ['label' => '通讯录', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="addressbook-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
