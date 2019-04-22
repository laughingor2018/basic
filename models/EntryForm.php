<?php


namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    /**
     * 返回数据验证规则的集合
     */
    public function rules()
    {
        return [
            //name 和 email 值都是必须的
            [['name', 'email'], 'required'],

            //email 的值必须满足email规则验证
            ['email', 'email'],
        ];
    }
}