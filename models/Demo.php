<?php


namespace app\models;

use yii\base\Model;

class Demo extends Model{

    public function showContent() {
        print_r(array(__CLASS__, __METHOD__));
    }
}