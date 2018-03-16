<?php
/**
 * Created by PhpStorm.
 * User: cgandhi
 * Date: 2018-01-24
 * Time: 11:19 AM
 */

namespace common\models\db\model;

use yii\base\Model;
use common\models\db\table\BisonNeighborhoodwatchTip as tbl_BisonNeighborhoodwatcTip;

class BisonNeighborhoodwatchTip extends Model
{

    public function getLastDbID(){
        $query = tbl_BisonNeighborhoodwatcTip::find()
                ->select([tbl_BisonNeighborhoodwatcTip::ID])
                ->orderBy(tbl_BisonNeighborhoodwatcTip::ID . ' DESC')
                ->limit(1);

        $results = $query->createCommand()->queryScalar();

        return $results;
    }
}