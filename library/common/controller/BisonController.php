<?php

namespace common\controller;

use yii\web\Controller;


class BisonController extends Controller
{
    public function beforeAction($action)
    {

        $result= parent::beforeAction($action);
//        var_dump("I am common controller");
        return $result;
    }
}