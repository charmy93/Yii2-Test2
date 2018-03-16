<?php
/**
 * Created by PhpStorm.
 * User: iwijetillake
 * Date: 2018-02-05
 * Time: 4:10 PM
 */

namespace common;

//
use yii\web\AssetBundle;
use frontend\assets\JsAsset;
use Yii;



class FlashMessenger
{

    public function show( $messageInfo = array() ){

        $messageType = key($messageInfo);
        foreach ($messageInfo as $key => $message){
            $message = $message[0];
        }
        Yii::$app->getView()->registerJs("Common.flashMessage('$messageType', '$message');");
    }
}