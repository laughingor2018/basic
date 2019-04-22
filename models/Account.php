<?php


namespace app\models;

use yii\db\ActiveRecord;


class Account extends ActiveRecord{

    public function rules(){
        return [
            ["account","safe"],
            ["password","safe"],
        ];
    }
}