<?php
/**
 * Created by PhpStorm.
 * User: cgandhi
 * Date: 2018-01-23
 * Time: 9:39 AM
 */

namespace common\models\db\model;
use common\models\db\table\AtsApplicationDocument as tbl_AtsApplicationDocument;
use yii\base\Model;


class AtsApplicationDocument extends Model
{

    public function countDocuments($hash)
    {
        $query = tbl_AtsApplicationDocument::find()
                ->select(['COUNT(*)'])
                ->where(tbl_AtsApplicationDocument::HASH . 'LIKE ? ', $hash);

        $command = $query->createCommand();
        $results = $command->queryOne();
        return $results;
    }
}