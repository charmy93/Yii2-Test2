<?php

namespace common\models\db\table;

use yii;
use yii\db\ActiveRecord;
use common\models\db\Schema;
use common\models\db\Tables;

/**
* This is the model class for table "intra_document".
*/
class IntraDocument extends ActiveRecord
{
const ADAPTER       = 'dbSqlimageBisonweb';    //db adapter
const SCHEMA        = Schema::SQLIMAGE_BISONWEB;
const TABLE_NAME    = Tables::INTRA_DOCUMENT;
    const ID    = 'id';    //integer
    const TITLE    = 'title';    //string
    const INTRA_DOCUMENT_SECTION_ID    = 'intra_document_section_id';    //integer
    const INTRA_DOCUMENT_CATEGORY_ID    = 'intra_document_category_id';    //integer
    const DESCRIPTION    = 'description';    //string
    const URL    = 'url';    //string
    const DATE_CREATED    = 'date_created';    //string
    const DATE_MODIFIED    = 'date_modified';    //string
    const EMP_ID    = 'emp_id';    //string
    const IS_ACTIVE    = 'is_active';    //integer
    const PUBLISHED_DATE    = 'published_date';    //string
    const DOCUMENT_TYPE    = 'document_type';    //string
    const DOC_CONTROL_ID    = 'doc_control_id';    //integer
    const CONSUMER    = 'consumer';    //string

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
            [['title', 'intra_document_section_id', 'date_created', 'date_modified', 'emp_id', 'is_active', 'document_type', 'consumer'], 'required'],
            [['title', 'description', 'url', 'emp_id', 'document_type', 'consumer'], 'string'],
            [['intra_document_section_id', 'intra_document_category_id', 'is_active', 'doc_control_id'], 'integer'],
            [['date_created', 'date_modified', 'published_date'], 'safe'],
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'id' => 'ID',
    'title' => 'Title',
    'intra_document_section_id' => 'Intra Document Section ID',
    'intra_document_category_id' => 'Intra Document Category ID',
    'description' => 'Description',
    'url' => 'Url',
    'date_created' => 'Date Created',
    'date_modified' => 'Date Modified',
    'emp_id' => 'Emp ID',
    'is_active' => 'Is Active',
    'published_date' => 'Published Date',
    'document_type' => 'Document Type',
    'doc_control_id' => 'Doc Control ID',
    'consumer' => 'Consumer',
];
}
}