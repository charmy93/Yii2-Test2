<?php

namespace common\models\db\table;

use common\models\db\Schema;
use common\models\db\Tables;
use Yii;

/**
 * This is the model class for table "ats_application_source".
 *
 * @property integer $id
 * @property string $name
 * @property integer $is_active
 * @property integer $is_web_show
 * @property integer $sort_order
 * @property string $alt_name
 */
class AtsApplicationSource extends \yii\db\ActiveRecord
{
    const ADAPTER        = 'dbSqlimageBisonweb';         //db adapter
    const SCHEMA         =  Schema::SQLIMAGE_BISONWEB;
    const TABLE_NAME     =  Tables::ATS_APPLICATION_SOURCE;
    const ID             = 'id';    //int(0, 0)
    const NAME           = 'name';    //varchar(255, 0)
    const IS_ACTIVE      = 'is_active';    //tinyint(0, 0)
    const IS_WEB_SHOW    = 'is_web_show';    //tinyint(0, 0)
    const SORT_ORDER     = 'sort_order';    //int(0, 0)
    const ALT_NAME       = 'alt_name';    //varchar(255, 0)
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
            [['name', 'is_active', 'is_web_show', 'sort_order'], 'required'],
            [['name', 'alt_name'], 'string'],
            [['is_active', 'is_web_show', 'sort_order'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'is_active' => 'Is Active',
            'is_web_show' => 'Is Web Show',
            'sort_order' => 'Sort Order',
            'alt_name' => 'Alt Name',
        ];
    }
}
