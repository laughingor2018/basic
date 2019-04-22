<?php


namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Demo;

class HelloController extends Controller {

        public function actionIndex(){

            //$this->layout = "simple";
            //return "hello yii";

            //$demo = new Demo();

            //$demo->showContent();

            //return $this->render("index", array("item" => "this is item"));


            //$request = Yii::$app->request;

            // 判断请求的方法
//             if ($request->isAjax) { echo"该请求是一个 AJAX 请求"; }
//             if ($request->isGet)  { echo"请求方法是 GET"; }
//             if ($request->isPost) { echo"请求方法是 POST"; }
//             if ($request->isPut)  { echo"请求方法是 PUT"; }

             //$get = $request->get();  //等价于$_GET
             //$post = $request->post(); //等价于$_POST

            //获取指定的key值，如果没有值的话，则返回null，不会报错
            // $name = $request->post("name"); //等价于$_POST['name']
            // $age = $request->get("age");  //等价于$_GET['age']

            // 如果没有接受到参数时，使用默认参数
            // $gender = $request->get("gender", "male");
            // $addr = $request->get("addr", "BeiJing");

            // 头部信息，比如token
            //$token = $request->headers->get("token");
            //echo $token;

            $response = Yii::$app->response;

            // 设置状态码
            // $response->statusCode = 400;

            //设置和追加header信息
//            $response->headers->set("key", "one");
//            $response->headers->add("key", "two");

            // 设置响应主体的格式,yii框架会自动设置header的Content-Type
            // $response->format = \yii\web\Response::FORMAT_JSON;
            // return ["code" => 0, "msg" => "success"];

            //重定向,默认302，可设置为永久重定向301
             //return $this->redirect('https://www.baidu.com', 302);

            //在入口文件中自定义的常量：defined('BASEURL') or define('BASEURL', __DIR__ . '../../');
            //$response->sendFile(BASEURL."/controllers/SiteController.php");
        }
}