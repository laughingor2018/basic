<?php

use yii\helpers\Html;

?>


<?=Html::beginForm('','post',['id' => "add",'class' => "form-group"])?>

<?=Html::activeTextInput($model,"account",['id' => "account","class" => "form-control"])?>
<?=Html::activePasswordInput($model,"password",['id' => "password","class" => "form-control"])?>


<?=Html::submitButton("register",["class" => "btn btn-default"])?>
<?=Html::resetButton("reset",["class" => "btn btn-default"])?>


<?=Html::endForm()?>