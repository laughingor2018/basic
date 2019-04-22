<?php
use yii\helpers\Html;
?>


<?=Html::beginForm('test/index','post',['class' => 'form-group','id' => 'form-login'])?>

<?=Html::input('text','username','',['id' => 'username','class' => 'form-control username'])?>
<?=Html::input('password','password','',['id' => 'password','class' => 'form-control password'])?>
<?=Html::input('hidden','token','',['id' => 'token','class' => 'form-control token'])?>

<?=Html::textInput('username','',['id' => 'username','class' => 'form-control username'])?>
<?=Html::passwordInput('password','',['id' => 'password','class' => 'form-control password'])?>
<?=Html::hiddenInput('token','',['id' => 'token','class' => 'form-control token'])?>

<?=Html::textarea('content','',['id' => 'content','class' => 'form-control content'])?>


<?=Html::radio('status',true,['class' => 'form-control'])?>

<?=Html::radioList('sex',1,[0 => 'female',1 => 'male'],['class' => 'form-control'])?>

<?=Html::checkbox('football',true,['class' => 'form-control'])?>

<?=Html::checkboxList('sports',0,[0 => 'football',1 => 'basketball'],['class' => 'form-control'])?>

<?=Html::dropDownList('food',1,[0 => 'rice',1 => 'noodle'],['class' => 'form-control'])?>

<?=Html::input('text','test-label','',['class' => 'form-control'])?>
<?=Html::label('label-name','test-label',['class' => 'form-control label'])?>


<?=Html::fileInput('image',null,['class' => 'form-control'])?>


<?=Html::button('Button',['class' => 'form-control btn btn-primary'])?>
<?=Html::submitButton('Submit',['class' => 'form-control btn btn-primary'])?>
<?=Html::resetButton('Reset',['class' => 'form-control btn btn-primary'])?>

<?=Html::activeTextInput($model,"name",["id" => "name","class" => "form-control"])?>
<?=Html::activeTextInput($model,"age",["id" => "age","class" => "form-control"])?>
<?=Html::activeRadioList($model,"sex",[0 => "female",1 => "male"],["id" => "sex","class" => "form-control"])?>
<?=Html::activeCheckboxList($model,"favor",[0 => "football",1 => "basketball",2 => "volleyball"],["id" => "favor","class" => "form-control"])?>




<?Html::endForm()?>
