<?php

namespace common\models\db\table;

use common\models\db\Schema;
use common\models\db\Tables;
use Yii;
use yii\console\widgets\Table;

/**
 * This is the model class for table "states".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $is_active
 * @property integer $country_id
 * @property integer $sort_order
 */
class States extends \yii\db\ActiveRecord
{
    const ADAPTER        = 'dbSqlimageBisonweb';         //db adapter
    const SCHEMA       =  Schema::SQLIMAGE_BISONWEB;
    const TABLE_NAME    = Tables::STATES;
    const ID             = 'id';    //int(0)
    const NAME           = 'name';    //varchar(4)
    const DESCRIPTION    = 'description';    //varchar(255)
    const IS_ACTIVE      = 'is_active';    //tinyint(0)
    const COUNTRY_ID     = 'country_id';    //int(0)
    const SORT_ORDER     = 'sort_order';    //int(0)

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
            [['id'], 'required'],
            [['id', 'is_active', 'country_id', 'sort_order'], 'integer'],
            [['name', 'description'], 'string'],
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
            'description' => 'Description',
            'is_active' => 'Is Active',
            'country_id' => 'Country ID',
            'sort_order' => 'Sort Order',
        ];
    }
}
