<?php

namespace common\models\db\table;

use common\models\db\Schema;
use common\models\db\Tables;
use Yii;

/**
 * This is the model class for table "ats_application".
 *
 * @property integer $id
 * @property integer $person_id
 * @property integer $posting_id
 * @property integer $status_id
 * @property string $date
 * @property string $salary
 * @property string $available
 * @property string $note
 * @property integer $source_id
 * @property string $referral
 * @property string $username
 * @property string $created
 * @property integer $original_person_id
 */
class AtsApplication extends \yii\db\ActiveRecord
{
    const ADAPTER                = 'dbSqlimageBisonweb';         //db adapter
    const SCHEMA                 =  Schema::SQLIMAGE_BISONWEB;
    const TABLE_NAME             =  Tables::ATS_APPLICATION;
    const ID                     = 'id';    //int(0)
    const PERSON_ID              = 'person_id';    //int(0)
    const POSTING_ID             = 'posting_id';    //int(0)
    const STATUS_ID              = 'status_id';    //int(0)
    const DATE                   = 'date';    //datetime(0)
    const SALARY                 = 'salary';    //varchar(10)
    const AVAILABLE              = 'available';    //varchar(25)
    const NOTE                   = 'note';    //text(0)
    const SOURCE_ID              = 'source_id';    //int(0)
    const REFERRAL               = 'referral';    //varchar(50)
    const EMP_ID                 = 'username';    //varchar(10)
    const CREATED                = 'created';    //datetime(0)
    const ORIGINAL_PERSON_ID     = 'original_person_id';    //int(0)

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return self::SCHEMA . '.' . self::TABLE_NAME;
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->{self::ADAPTER};
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['person_id', 'posting_id', 'status_id', 'source_id', 'original_person_id'], 'integer'],
            [['created'], 'required'],
            [['date', 'created'], 'safe'],
            [['salary', 'available', 'note', 'referral', 'username'], 'string'],
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        $this->id = self::getDb()->getLastInsertID();
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'person_id' => 'Person ID',
            'posting_id' => 'Posting ID',
            'status_id' => 'Status ID',
            'date' => 'Date',
            'salary' => 'Salary',
            'available' => 'Available',
            'note' => 'Note',
            'source_id' => 'Source ID',
            'referral' => 'Referral',
            'username' => 'Username',
            'created' => 'Created',
            'original_person_id' => 'Original Person ID',
        ];
    }
}
