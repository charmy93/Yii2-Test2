<?php
/**
 * Created by PhpStorm.
 * User: cgandhi
 * Date: 2017-12-20
 * Time: 2:44 PM
 */

namespace common\models\db\model;


use common\models\db\Tables;
use yii\base\Model;
use common\models\db\table\Country as tbl_Country;

class Country extends Model
{
    protected $_table;

    public function __construct(array $config = [])
    {

    }

    public function getAll(){
        $query = tbl_Country::find()
            ->orderBy([
                tbl_Country::SORT_ORDER => SORT_DESC,
                tbl_Country::PRINTABLE_NAME => SORT_ASC
            ])
            ->all();

        return $query;
    }

    public function getCountry(){

    }
}