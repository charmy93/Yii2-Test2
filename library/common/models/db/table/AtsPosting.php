<?php

namespace common\models\db\table;

use yii;
use yii\db\ActiveRecord;
use common\models\db\Schema;
use common\models\db\Tables;

/**
 * This is the model class for table "ats_posting".
 *
 * @property integer $id
 * @property string $title
 * @property string $opening_date
 * @property string $closing_date
 * @property string $department_code
 * @property string $web_category
 * @property string $terminal
 * @property string $company
 * @property string $note
 * @property string $emp_id
 * @property string $created
 * @property string $web_title
 * @property string $new_profile
 * @property string $eluta_profile
 * @property integer $is_internal_only
 * @property integer $is_active
 * @property string $thank_you_uri
 */
class AtsPosting extends ActiveRecord
{
    const ADAPTER       = 'dbSqlimageBisonweb';    //db adapter
    const SCHEMA        = Schema::SQLIMAGE_BISONWEB;
    const TABLE_NAME    = Tables::ATS_POSTING;
    const ID                   = 'id';    //int(0)
    const TITLE                = 'title';    //varchar(100)
    const OPENING_DATE         = 'opening_date';    //datetime(0)
    const CLOSING_DATE         = 'closing_date';    //datetime(0)
    const DEPARTMENT           = 'department_code';    //varchar(50)
    const WEB_CATEGORY         = 'web_category';    //varchar(50)
    const TERMINAL             = 'terminal';    //varchar(50)
    const COMPANY              = 'company';    //varchar(50)
    const NOTE                 = 'note';    //text(0)
    const EMP_ID               = 'emp_id'; //varchar(10)
    const CREATED              = 'created';    //datetime(0)
    const WEB_TITLE            = 'web_title';    //varchar(100)
    const NEW_PROFILE          = 'new_profile';    //text(0)
    const ELUTA_PROFILE        = 'eluta_profile';    //text(0)
    const IS_INTERNAL_ONLY     = 'is_internal_only';    //tinyint(0)
    const IS_ACTIVE            = 'is_active';    //tinyint(0)
    const THANK_YOU_URI        = 'thank_you_uri';    //varchar(255)
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
            [['title', 'department_code', 'web_category', 'terminal', 'company', 'note', 'emp_id', 'web_title', 'new_profile', 'eluta_profile', 'thank_you_uri'], 'string'],
            [['opening_date', 'closing_date', 'created'], 'safe'],
            [['is_internal_only', 'is_active'], 'required'],
            [['is_internal_only', 'is_active'], 'integer'],
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
            'opening_date' => 'Opening Date',
            'closing_date' => 'Closing Date',
            'department_code' => 'Department Code',
            'web_category' => 'Web Category',
            'terminal' => 'Terminal',
            'company' => 'Company',
            'note' => 'Note',
            'emp_id' => 'Emp ID',
            'created' => 'Created',
            'web_title' => 'Web Title',
            'new_profile' => 'New Profile',
            'eluta_profile' => 'Eluta Profile',
            'is_internal_only' => 'Is Internal Only',
            'is_active' => 'Is Active',
            'thank_you_uri' => 'Thank You Uri',
        ];
    }

    public static function findIdentity($id)
    {
//        $session = Yii::$app->session;
//        return ($session->has('user')) ? new static($session->get('user')) : null;
        return static::findOne([self::ID => $id]);
    }
}
