<?php

namespace common\models\db\table;

use yii;
use yii\db\ActiveRecord;
use common\models\db\Schema;
use common\models\db\Tables;

/**
* This is the model class for table "bison_neighborhoodwatch_tip".
*/
class BisonNeighborhoodwatchTip extends ActiveRecord
{
    const ADAPTER               = 'dbSqlserverBison';    //db adapter
    const SCHEMA                = Schema::SQLSERVER_BISON;
    const TABLE_NAME            = Tables::BISON_NEIGHBORHOOD_WATCH_TIP;
    const ID                    = 'id';    //integer
    const CLAIM_INCIDENT_NUMBER = 'claim_incident_number';    //string
    const CALLER_NAME           = 'caller_name';    //string
    const CALLER_PHONE          = 'caller_phone';    //string
    const CALLER_PREFTIME       = 'caller_preftime';    //string
    const CALLER_EMAIL          = 'caller_email';    //string
    const INCIDENT_LOCATION     = 'incident_location';    //string
    const INCIDENT_INFO         = 'incident_info';    //string
    const SUSPECT_NAME          = 'suspect_name';    //string
    const SUSPECT_RACE          = 'suspect_race';    //string
    const SUSPECT_SEX           = 'suspect_sex';    //string
    const SUSPECT_HEIGHT        = 'suspect_height';    //string
    const SUSPECT_WEIGHT        = 'suspect_weight';    //string
    const SUSPECT_AGE           = 'suspect_age';    //string
    const SUSPECT_HAIR          = 'suspect_hair';    //string
    const SUSPECT_EYES          = 'suspect_eyes';    //string
    const SUSPECT_SCARS         = 'suspect_scars';    //string
    const SUSPECT_CLOTHING      = 'suspect_clothing';    //string
    const SUSPECT_ANIMALS       = 'suspect_animals';    //string
    const SUSPECT_WEAPONS       = 'suspect_weapons';    //string
    const SUSPECT_LASTSEEN      = 'suspect_lastseen';    //string
    const SUSPECT_OTHER         = 'suspect_other';    //string
    const VEHICLE_MAKE          = 'vehicle_make';    //string
    const VEHICLE_MODEL         = 'vehicle_model';    //string
    const VEHICLE_COLOUR        = 'vehicle_colour';    //string
    const VEHICLE_YEAR          = 'vehicle_year';    //string
    const VEHICLE_LICENSE       = 'vehicle_license';    //string
    const VEHICLE_PROVINCE      = 'vehicle_province';    //string
    const VEHICLE_OTHER         = 'vehicle_other';    //string
    const PHOTO_PATH            = 'photo_path';    //string
    const ORIGIN_ID             = 'origin_id';    //integer
    const STATUS_ID             = 'status_id';    //integer
    const REWARD_ELIGIBLE       = 'reward_eligible';    //integer
    const REWARD_AMT            = 'reward_amt';    //string
    const CREATED               = 'created';    //string
    const INCIDENT_DATE         = 'incident_date';    //string
    const INCIDENT_TIME         = 'incident_time';    //string
    const ORIGIN_USERNAME       = 'origin_username';    //string

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
                [['claim_incident_number', 'origin_id', 'status_id'], 'required'],
                [['claim_incident_number', 'caller_name', 'caller_phone', 'caller_preftime', 'caller_email', 'incident_location', 'incident_info', 'suspect_name', 'suspect_race', 'suspect_sex', 'suspect_height', 'suspect_weight', 'suspect_age', 'suspect_hair', 'suspect_eyes', 'suspect_scars', 'suspect_clothing', 'suspect_animals', 'suspect_weapons', 'suspect_lastseen', 'suspect_other', 'vehicle_make', 'vehicle_model', 'vehicle_colour', 'vehicle_year', 'vehicle_license', 'vehicle_province', 'vehicle_other', 'photo_path', 'incident_time', 'origin_username'], 'string'],
                [['origin_id', 'status_id', 'reward_eligible'], 'integer'],
                [['reward_amt'], 'number'],
                [['created'], 'safe'],
            ];
    }

    /**
    * @inheritdoc
    */
    public function attributeLabels()
    {
    return [
        'id' => 'ID',
        'claim_incident_number' => 'Claim Incident Number',
        'caller_name' => 'Caller Name',
        'caller_phone' => 'Caller Phone',
        'caller_preftime' => 'Caller Preftime',
        'caller_email' => 'Caller Email',
        'incident_location' => 'Incident Location',
        'incident_info' => 'Incident Info',
        'suspect_name' => 'Suspect Name',
        'suspect_race' => 'Suspect Race',
        'suspect_sex' => 'Suspect Sex',
        'suspect_height' => 'Suspect Height',
        'suspect_weight' => 'Suspect Weight',
        'suspect_age' => 'Suspect Age',
        'suspect_hair' => 'Suspect Hair',
        'suspect_eyes' => 'Suspect Eyes',
        'suspect_scars' => 'Suspect Scars',
        'suspect_clothing' => 'Suspect Clothing',
        'suspect_animals' => 'Suspect Animals',
        'suspect_weapons' => 'Suspect Weapons',
        'suspect_lastseen' => 'Suspect Lastseen',
        'suspect_other' => 'Suspect Other',
        'vehicle_make' => 'Vehicle Make',
        'vehicle_model' => 'Vehicle Model',
        'vehicle_colour' => 'Vehicle Colour',
        'vehicle_year' => 'Vehicle Year',
        'vehicle_license' => 'Vehicle License',
        'vehicle_province' => 'Vehicle Province',
        'vehicle_other' => 'Vehicle Other',
        'photo_path' => 'Photo Path',
        'origin_id' => 'Origin ID',
        'status_id' => 'Status ID',
        'reward_eligible' => 'Reward Eligible',
        'reward_amt' => 'Reward Amt',
        'created' => 'Created',
        'incident_date' => 'Incident Date',
        'incident_time' => 'Incident Time',
        'origin_username' => 'Origin Username',
    ];
    }
}