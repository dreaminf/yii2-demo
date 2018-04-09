<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
$this->title = '二维码信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<?=Html::style("
.center{margin:0 auto;}
#i_qrcode{display:block}
#i_tip_msg{font-size:16px;}
")?>
<div class="cardinfo-qrcode">
    <h1><?= Html::encode($this->title) ?></h1>
    <?=Html::img("@web/".$img_path,['id'=>"i_qrcode","class"=>"center"])?>
    <?=Html::hiddenInput("rand_code",$rand_code,['id'=>"i_rand_code"])?>
    <?=Html::hiddenInput("_csrf",Yii::$app->request->csrfToken,["id"=>"i_csrf"])?>
    <p id="i_tip_msg" class="text-center text-danger">二维码两分钟后过期！</p>
</div>
<script>
    var csf="<?=Yii::$app->request->getCsrfToken()?>";
</script>
<?=$this->registerJsFile('@web/statics/js/qrcode.js', ['depends' => [\yii\web\JqueryAsset::className()]]);?>
