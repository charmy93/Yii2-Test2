<?php
/**
 * Created by PhpStorm.
 * User: cgandhi
 * Date: 2018-01-25
 * Time: 9:39 AM
 */

namespace common;
use yii\base\Event;
use yii\helpers\ArrayHelper;
use yii\widgets\InputWidget;
use yii\helpers\Html;

class PhoneInput extends InputWidget
{
    public $htmlTagType = 'text';
  //  public $defaultOptions = ['class'=>'phone'];
    public $id;
    public $name;

   public function init()
   {
       parent::init();
       $this->id = ArrayHelper::getValue($this->options,'id');
   }

   public function run()
   {
       //$options = ArrayHelper::merge($this->defaultOptions, $this->options);
       $options = $this->options;
       if ($this->hasModel()) {
           $options['id'] = $this->id . '_area_code';
            $options['class'] = 'phone area_code';
           $phone = Html::activeInput($this->htmlTagType, $this->model, $this->attribute, $options);

           $options['id'] = $this->id . '_prefix';
           $options['class'] = 'phone prefix';
           $phone .= Html::activeInput($this->htmlTagType, $this->model, $this->attribute, $options);

           $options['id'] = $this->id . '_line_number';
           $options['class'] = 'phone line_number';
           $phone .= Html::activeInput($this->htmlTagType, $this->model, $this->attribute, $options);

           return $phone;
       }
       return Html::input($this->htmlTagType, $this->name, $this->value, $options);
   }
}