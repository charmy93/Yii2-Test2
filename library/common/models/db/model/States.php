<?php
/**
 * Created by PhpStorm.
 * User: cgandhi
 * Date: 2017-12-20
 * Time: 3:59 PM
 */

namespace common\models\db\model;


use yii\base\Model;
use common\models\db\table\States as tbl_States;

class States extends Model
{

    public function getStatesByCountry($countryID = null,$is_active = 1){
        $query = tbl_States::find()
                ->where(tbl_States::IS_ACTIVE . ' = ' . 1)
                ->orderBy([
                    tbl_States::COUNTRY_ID => SORT_ASC,
                    tbl_States::DESCRIPTION => SORT_ASC
                ]);

        if(!is_null($countryID)){
            $query->andWhere(tbl_States::COUNTRY_ID . ' = :countryID')
                ->addParams([':countryID' => $countryID]);
        }

        $results = $query->all();
        return $results;
    }
}