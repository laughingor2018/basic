<?php


namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Account;
use yii\data\Pagination;
use yii\helpers\Url;


class AccountController extends Controller {

    public function actionIndex(){
        $query = Account::find();
        $countQuery = clone $query;
        $count = $countQuery->count();

        $pagination = new Pagination(['totalCount' => $count,"pageSize" => 2]);

        $accounts = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render("index",["accounts" => $accounts,"pagination" => $pagination]);
    }

    public function actionCreate(){
        $model = new Account();
        if(Yii::$app->request->isPost){
            if($model->load(Yii::$app->request->post()) && $model->save()){
                return $this->redirect(Url::toRoute(["account/index"]));
            }
        }

        return $this->render("create",["model" => $model]);
    }

    public function actionDelete(){
        $id = Yii::$app->request->get("id",0);
        $account = Account::findOne($id);
        if($account){
            $account->delete();
        }

        return $this->redirect(Url::toRoute(["account/index"]));
    }

    public function actionUpdate(){
        if(Yii::$app->request->isPost){
            $Account = Yii::$app->request->post("Account",[]);
            if(empty($Account)){
                $account = Account::findOne($Account['id']);
                $account['account'] = $Account['account'];
                $account['password'] = $Account['password'];
                $account->save();
            }
        }
        return $this->redirect(Url::toRoute(["account/index"]));
    }

    public function actionRead(){
        $id = Yii::$app->request->get("id",0);
        $account = Account::findOne($id);
        if($account){
            return $this->render('read',["model" => $account]);
        }

        return $this->redirect(Url::toRoute(["account/index"]));
    }
}