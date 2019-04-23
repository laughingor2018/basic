<?php


namespace app\models;

use yii\db\ActiveRecord;


class Account extends ActiveRecord{

    public function rules(){
        return [
            ["id","safe"],
            ["account","safe"],
            ["password","safe"],
        ];
    }
}