<?php
/**
 * Created by PhpStorm.
 * User: cgandhi
 * Date: 2018-01-23
 * Time: 1:17 PM
 */

namespace common\models\db\model;

use common\models\db\table\AtsApplicationInterviewAttachment as tbl_AtsApplicationInterviewAttachment;
use yii\base\Model;

class AtsApplicationInterviewAttachment extends Model
{
    public function countDocuments($hash)
    {
        $query = tbl_AtsApplicationInterviewAttachment::find()
                ->select(['COUNT(*)'])
                ->where(tbl_AtsApplicationInterviewAttachment::HASH . ' LIKE ? ', $hash);

        $results = $query->createCommand()->queryOne();
        return $results;
    }

}