<?php


namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Account;
use yii\data\Pagination;


class AccountController extends Controller {

    public function actionIndex(){
        $query = Account::find();

        $count = $query->count();

        $pagination = new Pagination(['totalCount' => $count]);

        $accounts = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render("index",["accounts" => $accounts]);
    }

    public function actionCreate(){
        $model = new Account();
        if(Yii::$app->request->isPost){
            if($model->load(Yii::$app->request->post()) && $model->save()){
                $this->render("index",["model" => $model]);
            }
        }

        return $this->render("index",["model" => $model]);
    }

    public function actionDelete(){
        $id = Yii::$app->request->get("id",0);
        $account = Account::findOne($id);
        if($account){
            $account->delete();
        }

        //return $this->render("index",["model" => $account]);
    }

    public function actionUpdate(){
        $id = Yii::$app->request->post("id",0);
        $password = Yii::$app->request->post("password",'');
        $account = Account::findOne($id);
        $account["password"] = $password;
        $account->update();
    }

    public function actionRead(){
        $id = Yii::$app->request->get("id",0);
        $account = Account::findOne($id);
        return $this->render('index',["model" => $account]);
    }
}