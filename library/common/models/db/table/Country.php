<?php

namespace common\models\db\table;

use common\models\db\Schema;
use common\models\db\Tables;
use Yii;

/**
 * This is the model class for table "country".
 *
 * @property integer $id
 * @property string $iso
 * @property string $name
 * @property string $printable_name
 * @property string $iso3
 * @property integer $numcode
 * @property integer $sort_order
 */
class Country extends \yii\db\ActiveRecord
{
    const ADAPTER           = 'dbSqlimageBisonweb';         //db adapter
    const SCHEMA            =  Schema::SQLIMAGE_BISONWEB;
    const TABLE_NAME        =  Tables::COUNTRY;
    const ID                = 'id';    //int(0)
    const ISO               = 'iso';    //char(2)
    const NAME              = 'name';    //varchar(80)
    const PRINTABLE_NAME    = 'printable_name';    //varchar(80)
    const ISO3              = 'iso3';    //char(3)
    const NUMCODE           = 'numcode';    //smallint(0)
    const SORT_ORDER        = 'sort_order';    //smallint(0)

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
            [['iso', 'name', 'printable_name', 'sort_order'], 'required'],
            [['iso', 'name', 'printable_name', 'iso3'], 'string'],
            [['numcode', 'sort_order'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'iso' => 'Iso',
            'name' => 'Name',
            'printable_name' => 'Printable Name',
            'iso3' => 'Iso3',
            'numcode' => 'Numcode',
            'sort_order' => 'Sort Order',
        ];
    }
}
