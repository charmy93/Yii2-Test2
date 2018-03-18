<?php
/**
 * Created by PhpStorm.
 * User: cgandhi
 * Date: 2017-12-20
 * Time: 8:49 AM
 */

namespace common\models\db\model;
use yii\base\Model;
use common\models\db\table\AtsApplicationSource as tbl_AtsApplicationSource;


class AtsApplicationSource extends Model
{
    public function getSources($isWebShow = 1, $isActive = 1 ){

        $query = tbl_AtsApplicationSource::find()
                ->where(tbl_AtsApplicationSource::IS_ACTIVE . ' = ' . $isActive)
                ->orderBy(tbl_AtsApplicationSource::NAME );

        if($isWebShow != false){
            $query->andWhere(tbl_AtsApplicationSource::IS_WEB_SHOW . ' = ' . $isWebShow);
        }

        $results = $query->createCommand()->queryAll();
        return $results;
    }
}