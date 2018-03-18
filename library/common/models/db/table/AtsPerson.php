<?php

namespace common\models\db\table;

use Codeception\Module\Sequence;
use common\models\ApplyNowForm;
use common\models\db\Schema;
use common\models\db\Tables;
use Yii;

/**
 * This is the model class for table "ats_person".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $city
 * @property string $province_state
 * @property string $country
 * @property string $postal
 * @property string $phone
 * @property string $phone_alt
 * @property string $email
 * @property string $note
 * @property string $username
 * @property string $created
 * @property string $province_other
 * @property integer $parent_id
 * @property string $internal_emp_id
 */
class AtsPerson extends \yii\db\ActiveRecord
{
    const ADAPTER              = 'dbSqlimageBisonweb';         //db adapter
    const SCHEMA               =  Schema::SQLIMAGE_BISONWEB;
    const TABLE_NAME           =  Tables::ATS_PERSON;
    const ID                   = 'id';    //int(0)
    const FIRST_NAME           = 'first_name';    //varchar(25)
    const LAST_NAME            = 'last_name';    //varchar(25)
    const ADDRESS              = 'address';    //varchar(50)
    const CITY                 = 'city';    //varchar(25)
    const PROVINCE             = 'province_state';    //varchar(25)
    const PROVINCE_OTHER       = 'province_other';	//varchar(25)
    const COUNTRY              = 'country';    //varchar(50)
    const POSTAL               = 'postal';    //varchar(10)
    const PHONE                = 'phone';    //bigint(0)
    const PHONE_ALT            = 'phone_alt';    //bigint(0)
    const EMAIL                = 'email';    //varchar(50)
    const USERNAME             = 'username';
    const NOTE                 = 'note';    //text(0)
    const EMP_ID               = 'username';    //varchar(10)
    const CREATED              = 'created';    //datetime(0)
    const PARENT_ID            = 'parent_id';  //int(0)
    const INTERNAL_EMP_ID      = 'internal_emp_id';    //varchar(10)
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

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        $this->id = self::getDb()->getLastInsertID();
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'address', 'city', 'country', 'postal', 'created', 'parent_id'], 'required'],
            [['first_name', 'last_name', 'address', 'city', 'province_state', 'country', 'postal', 'phone', 'phone_alt', 'email', 'note', 'username', 'province_other', 'internal_emp_id'], 'string'],
            [['created'], 'safe'],
            [['parent_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'address' => 'Address',
            'city' => 'City',
            'province_state' => 'Province State',
            'country' => 'Country',
            'postal' => 'Postal',
            'phone' => 'Phone',
            'phone_alt' => 'Phone Alt',
            'email' => 'Email',
            'note' => 'Note',
            'username' => 'Username',
            'created' => 'Created',
            'province_other' => 'Province Other',
            'parent_id' => 'Parent ID',
            'internal_emp_id' => 'Internal Emp ID',
        ];
    }
}
