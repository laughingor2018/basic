<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<?=Html::beginForm(Url::toRoute("account/update"),'post',['id' => "user-form",'class' => "form-horizontal"]);?>

<?=Html::beginTag("div",["class" => "form-group"]);?>
<?=Html::label("Id","id",["class" => "col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label"]);?>
<?=Html::beginTag("div",["class" => "col-xs-10 col-sm-10 col-md-10 col-lg-10"]);?>
<?=Html::activeHiddenInput($model,"id",['id' => "user_id","class" => "form-control","placeholder" => "id"]);?>
<?=Html::endTag("div");?>
<?=Html::endTag("div");?>

<?=Html::beginTag("div",["class" => "form-group"]);?>
<?=Html::label("Account","account",["class" => "col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label"]);?>
<?=Html::beginTag("div",["class" => "col-xs-10 col-sm-10 col-md-10 col-lg-10"]);?>
<?=Html::activeTextInput($model,"account",['id' => "account","class" => "form-control","placeholder" => "account"]);?>
<?=Html::endTag("div");?>
<?=Html::endTag("div");?>

<?=Html::beginTag("div",["class" => "form-group"]);?>
<?=Html::label("Password","password",["class" => "col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label"]);?>
<?=Html::beginTag("div",["class" => "col-xs-10 col-sm-10 col-md-10 col-lg-10"]);?>
<?=Html::activePasswordInput($model,"password",['id' => "password","class" => "form-control","placeholder" => "password"]);?>
<?=Html::endTag("div");?>
<?=Html::endTag("div");?>

<?=Html::beginTag("div",["class" => "form-group"]);?>
<?=Html::beginTag("div",["class" => "col-xs-6 col-sm-6 col-md-6 col-lg-6"]);?>
<?=Html::submitButton("submit",["class" => "btn btn-primary form-control"]);?>
<?=Html::endTag("div");?>

<?=Html::beginTag("div",["class" => "col-xs-6 col-sm-6 col-md-6 col-lg-6"]);?>
<?=Html::resetButton("reset",["class" => "btn btn-primary form-control"]);?>
<?=Html::endTag("div");?>
<?=Html::endTag("div");?>

<?=Html::endForm();?>