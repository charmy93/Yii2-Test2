<?php

namespace common\models\db\table;

use yii;
use yii\db\ActiveRecord;
use common\models\db\Schema;
use common\models\db\Tables;

/**
* This is the model class for table "ats_application_interview_attachment".
*/
class AtsApplicationInterviewAttachment extends ActiveRecord
{
const ADAPTER       = 'dbSqlimageBisonweb';    //db adapter
const SCHEMA        = Schema::SQLIMAGE_BISONWEB;
const TABLE_NAME    = Tables::ATS_APPLICATION_INTERVIEW_ATTACHMENT;
    const ID    = 'id';    //integer
    const INTERVIEW_ID    = 'interview_id';    //integer
    const TYPE    = 'type';    //string
    const MIME    = 'mime';    //string
    const LENGTH    = 'length';    //integer
    const USERNAME    = 'username';    //string
    const CHANGED    = 'changed';    //string
    const EXT    = 'ext';    //string
    const HASH    = 'hash';    //string

/**
* @inheritdoc
*/

public static function setSchema()
{
return self::SCHEMA;
}

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
            [['interview_id', 'type', 'mime', 'length', 'username', 'changed'], 'required'],
            [['interview_id', 'length'], 'integer'],
            [['type', 'mime', 'username', 'ext', 'hash'], 'string'],
            [['changed'], 'safe'],
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'id' => 'ID',
    'interview_id' => 'Interview ID',
    'type' => 'Type',
    'mime' => 'Mime',
    'length' => 'Length',
    'username' => 'Username',
    'changed' => 'Changed',
    'ext' => 'Ext',
    'hash' => 'Hash',
];
}
}