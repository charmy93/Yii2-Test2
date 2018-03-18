<?php
/**
 * Created by PhpStorm.
 * User: cgandhi
 * Date: 2018-01-26
 * Time: 2:41 PM
 */

namespace common\models\db\model;


use yii\base\Model;
use common\models\db\table\IntraDocument as tbl_IntraDocument;

class IntraDocument extends Model
{

    public function getDocumentById($id)
    {
        $query = tbl_IntraDocument::find()
                ->where(tbl_IntraDocument::ID . ' = :id')
                ->addParams([':id'=>$id])
                ->one();

        return $query;
    }
}