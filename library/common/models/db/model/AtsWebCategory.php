<?php
/**
 * Created by PhpStorm.
 * User: cgandhi
 * Date: 2017-12-13
 * Time: 11:56 AM
 */

namespace common\models\db\model;
use common\models\db\table\AtsWebCategory as tbl_AtsWebCategory;
use yii\base\Model;


class AtsWebCategory extends Model
{
    public function getAll(){
        $query = tbl_AtsWebCategory::find()
                ->all();

        return $query;
    }
}