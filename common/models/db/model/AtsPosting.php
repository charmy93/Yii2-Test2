<?php

namespace common\models\db\model;

use common\models\db\table\AtsPosting as tbl_AtsPosting;
use common\models\db\table\AtsWebCategory as tbl_AtsWebCategory;
use common\models\db\Tables;
use Yii;
use yii\base\Model;
use yii\console\widgets\Table;
use yii\db\Query;

class AtsPosting extends Model
{


    public function getPostingById($id)
    {
        $select = tbl_AtsPosting::find()
            ->where(tbl_AtsPosting::ID . '= :id')
            ->addParams([':id' => $id])
            ->one();
        return $select;
    }

    public function getPostings($activeOnly = true, $externalOnly = false, $terminal = null, $excludeWebCategory = array())
    {
        $query = tbl_AtsPosting::find()
            ->alias('ap')
            ->innerJoin(tbl_AtsWebCategory::tableName() . ' as ' . 'awc',
                'awc.' . tbl_AtsWebCategory::ID . ' = ' . 'ap.' . tbl_AtsPosting::WEB_CATEGORY)
            ->select(['ap.' . tbl_AtsPosting::ID,
                'ap.' . tbl_AtsPosting::TITLE,
                'ap.' . tbl_AtsPosting::TERMINAL,
                'ap.' . tbl_AtsPosting::DEPARTMENT,
                'ap.' . tbl_AtsPosting::CLOSING_DATE,
                'awc.' . tbl_AtsWebCategory::NAME])
            ->where('ap.' . tbl_AtsPosting::WEB_CATEGORY . ' <> :drivers')
            ->addParams([':drivers' => 'Drivers'])
            ->orderBy('ap.' . tbl_AtsPosting::WEB_CATEGORY)
            ->orderBy('ap.' . tbl_AtsPosting::TERMINAL);

        if ($activeOnly == true) {
            $query
                ->andWhere('ap.' . tbl_AtsPosting::CLOSING_DATE . ' >= GETDATE() ')
                ->andWhere('ap.' . tbl_AtsPosting::IS_ACTIVE . ' = ' . 1);

        }

        if ($externalOnly == true) {
            $query->andWhere('ap.' . tbl_AtsPosting::IS_INTERNAL_ONLY . ' = ' . 0);
        }

        if ((!is_null($terminal) || !empty($terminal)) && ($terminal != 'all')) {
            $query->andWhere('ap.' . tbl_AtsPosting::TERMINAL . ' = :terminal')
                ->addParams([':terminal' => $terminal]);
        }

        if (!empty($excludeWebCategory)) {
            $query->andWhere(['NOT IN', 'awc.' . tbl_AtsWebCategory::NAME, $excludeWebCategory]);
        }

        $command = $query->createCommand();

        $results = $command->queryAll();
        return $results;
    }

    public function getPostingsByCategory($activeOnly = true, $externalOnly = false, $terminal = null, $category)
    {
        $query = tbl_AtsPosting::find()
            ->alias('ap')
            ->innerJoin(tbl_AtsWebCategory::tableName() . ' as ' . 'awc',
                'awc.' . tbl_AtsWebCategory::ID . ' = ' . 'ap.' . tbl_AtsPosting::WEB_CATEGORY)
            ->select(['ap.' . tbl_AtsPosting::ID,
                'ap.' . tbl_AtsPosting::TITLE,
                'ap.' . tbl_AtsPosting::TERMINAL,
                'ap.' . tbl_AtsPosting::DEPARTMENT,
                'ap.' . tbl_AtsPosting::CLOSING_DATE,
                'awc.' . tbl_AtsWebCategory::NAME])
            ->Where('awc.' . tbl_AtsWebCategory::NAME . '= :category')
            ->addParams([':category' => $category])
            ->orderBy('ap.' . tbl_AtsPosting::WEB_CATEGORY)
            ->orderBy('ap.' . tbl_AtsPosting::TERMINAL);

        if ($activeOnly == true) {
            $query
                ->andWhere('ap.' . tbl_AtsPosting::CLOSING_DATE . ' >= GETDATE() ')
                ->andWhere('ap.' . tbl_AtsPosting::IS_ACTIVE . ' = ' . 1);

        }

        if ($externalOnly == true) {
            $query->andWhere('ap.' . tbl_AtsPosting::IS_INTERNAL_ONLY . ' = ' . 0);
        }

        if ((!is_null($terminal) || !empty($terminal)) && ($terminal != 'all')) {
            $query->andWhere('ap.' . tbl_AtsPosting::TERMINAL . ' = :terminal')
                ->addParams([':terminal' => $terminal]);
        }

        $command = $query->createCommand();
        $results = $command->queryAll();
        return $results;
    }

    public function getJobById($id)
    {
        $query = tbl_AtsPosting::find()
            ->alias('ap')
            ->select([
                tbl_AtsPosting::ID,
                tbl_AtsPosting::EMP_ID,
                tbl_AtsPosting::TITLE,
                tbl_AtsPosting::DEPARTMENT,
                tbl_AtsPosting::COMPANY,
                tbl_AtsPosting::NOTE,
                tbl_AtsPosting::OPENING_DATE,
                tbl_AtsPosting::CLOSING_DATE,
                tbl_AtsPosting::CREATED,
                tbl_AtsPosting::TERMINAL,
                tbl_AtsPosting::WEB_TITLE,
                tbl_AtsPosting::NEW_PROFILE,
                tbl_AtsPosting::ELUTA_PROFILE,
                tbl_AtsPosting::IS_INTERNAL_ONLY,
                tbl_AtsPosting::IS_ACTIVE,
                tbl_AtsPosting::THANK_YOU_URI
            ])
            ->where('ap.' . tbl_AtsPosting::ID . '= :id')
            ->addParams([':id' => $id]);

        $command = $query->createCommand();
        $results = $command->queryOne();
        return $results;
    }

    public function getGeneralPosting($terminal = null)
    {
        $query = tbl_AtsPosting::find()
            ->where(tbl_AtsPosting::TITLE . ' LIKE :generalConsideration')
            ->addParams([':generalConsideration' => 'General Consideration%'])
            ->andWhere(tbl_AtsPosting::IS_ACTIVE . ' = ' . 1);

        if ((!is_null($terminal) || !empty($terminal)) && ($terminal != 'all')) {
            $query->andWhere(tbl_AtsPosting::TERMINAL . ' = :terminal')
                ->addParams([':terminal' => $terminal]);
        } else {
            $query->andWhere(tbl_AtsPosting::TERMINAL . ' = \' \'');
        }

        $command = $query->createCommand();
        //echo $command->getRawSql();
        $results = $command->queryOne();
        return $results;
    }

    public function getJobListings($activeOnly = true, $excludeId = array(), $closingDate = null)
    {
        $query = tbl_AtsPosting::find()
            ->select([
                tbl_AtsPosting::ID,
                tbl_AtsPosting::WEB_TITLE,
                tbl_AtsPosting::TITLE,
                tbl_AtsPosting::DEPARTMENT,
                tbl_AtsPosting::TERMINAL,
                tbl_AtsPosting::WEB_CATEGORY,
                tbl_AtsPosting::CLOSING_DATE,
                tbl_AtsPosting::IS_ACTIVE
            ])
            ->where(tbl_AtsPosting::WEB_CATEGORY . ' <> :drivers')
            ->addParams([':drivers' => 'Drivers']);

        if ($activeOnly == true) {
            $query->andWhere(tbl_AtsPosting::CLOSING_DATE . ' >= GETDATE()')
                ->andWhere(tbl_AtsPosting::IS_INTERNAL_ONLY . ' = ' . 0)
                ->andWhere(tbl_AtsPosting::IS_ACTIVE . ' = ' . 1);
        }

        if (count($excludeId) > 0) {
            $query->andWhere(['NOT IN', tbl_AtsPosting::ID, $excludeId]);
        }

        if (!is_null($closingDate)) {
            $query->andWhere(tbl_AtsPosting::CLOSING_DATE . ' >= ' . $closingDate);
        }

        $results = $query->createCommand()->queryAll();
        return $results;

    }
}