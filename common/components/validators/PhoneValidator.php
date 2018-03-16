<?php
namespace common\components\validators;

use yii\validators\Validator;

class PhoneValidator extends Validator
{
    public function validateAttribute($model, $attribute)
    {
        var_dump($model->us_state);
        exit;
        var_dump($model->$attribute);
        exit;
        if (!empty($model->$attribute)) {

            if (is_array($model->$attribute)) {
                if (count($model->$attribute) == 3) {
                    if (strlen((int)$model->$attribute[0]) != 3) {
                        $this->addError($model, $attribute, '0th index Should contain at least 10 characters.');
                    }
                    if (strlen((int)$model->$attribute[1]) != 3) {
                        $this->addError($model, $attribute, '1th index Should contain at least 10 characters.');
                    }
                    if (strlen((int)$model->$attribute[2]) != 4) {
                        $this->addError($model, $attribute, '2th index Should contain at least 10 characters.');
                    }
                }
            } else {
                if (strlen((int)$model->$attribute) < 10) {
                    $this->addError($model, $attribute, 'Should contain at least 10 characters.');
                }
            }
        } else {
            $this->addError($model, $attribute, 'Phone cannot be blank.');
        }
//        $model->$attribute = implode("",$model->$attribute);
    }
}