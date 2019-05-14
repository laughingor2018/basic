<?php


namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\EntryForm;//引入命名空间
use app\models\Country;
use app\models\Account;
use yii\helpers\Url;

class TestController extends Controller{

    /**
     * index
     * Yii 使用 action 前缀区分普通方法和操作。action 前缀后面的名称被映射为操作的 ID
     */
    public function actionIndex($msg = 'hello') {

        //index 视图应该存为 views/test/index.php 文件
        //按 views/控制器 ID/视图名.php 路径加载 PHP 文件
                return $this->render('index', array('msg' => $msg));
//        $model = new EntryForm();
//        if ($model->load(Yii::$app->request->post(),'') && $model->validate()) {
//            return $this->render('index', array('msg' => $msg));
//        }

        //var_dump($model->getErrors());
    }

    /**
     * my-index
     * 操作 ID 总是被以小写处理，如果一个操作 ID 由多个单词组成，单词之间将由连字符连接（如 my-index）;
     * 操作 ID 映射为方法名时移除了连字符，将每个单词首字母大写，并加上 action 前缀。例子：操作 ID my-index 相当于方法名 actionMyIndex
     */
    public function actionMyIndex($msg = 'hello') {

        return $this->render('my-index', array('msg' => $msg));
    }

    public function actionListCountry() {
        //获取所有
//        $list = Country::find()->orderBy('name')->asArray()->all();
//
//        echo "<pre>";
//        print_r($list);
//        echo "</pre>";
        //获取一条
//        $one = Country::findOne(['name' => 'China']);
//        echo "<pre>";
//        print_r($one);
//        print_r($one->name);
//        echo "</pre>";

        //更新
        // 修改 name 为 U.S.A. 并在数据库中保存更改
        //$one->name = 'U.S.A.';
        //$one->save();
    }


    public function actionView () {
        return $this->render("view");
    }

    public function actionAccount(){

        $model = new Account();

        if(Yii::$app->request->isPost){
            if($model->load(Yii::$app->request->post()) && $model->save()){
                echo "success";
            } else {
                echo "error";
            }
            return;
            //return $this->render("account",$model);
        }


        return $this->render("account",["model" => $model]);
    }

    public function actionUrl(){

        echo "Url::to";echo "<br>";
        echo 'Url::to(\"site/index\") '.Url::to("site/index");echo "<br>";
        echo 'Url::to(["site/index"]) '.Url::to(["site/index"]);echo "<br>";
        echo 'Url::to("site/index",true) '.Url::to("site/index",true);echo "<br>";
        echo 'Url::to(["site/index"],true) '.Url::to(["site/index"],true);echo "<br>";
        echo "Url::toRoute";echo "<br>";
        echo 'Url::toRoute("site/index") '.Url::toRoute("site/index");echo "<br>";
        echo 'Url::toRoute(["site/index"]) '.Url::toRoute(["site/index"]);echo "<br>";
        echo 'Url::toRoute("site/index",true) '.Url::toRoute("site/index",true);echo "<br>";
        echo 'Url::toRoute(["site/index"],true) '.Url::toRoute(["site/index"],true);echo "<br>";
    }
}