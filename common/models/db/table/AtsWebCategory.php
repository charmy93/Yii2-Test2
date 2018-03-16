<?php

namespace common\models\db\table;

use common\models\db\Schema;
use common\models\db\Tables;
use Yii;

/**
 * This is the model class for table "ats_web_category".
 *
 * @property integer $id
 * @property string $name
 */
class AtsWebCategory extends \yii\db\ActiveRecord
{
    const ADAPTER       = 'dbSqlimageBisonweb';    //db adapter
    const SCHEMA        = Schema::SQLIMAGE_BISONWEB;
    const TABLE_NAME    = Tables::ATS_WEB_CATEGORY;
    const ID         = 'id';    //int(0)
    const NAME       = 'name';    //varchar(255)
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
            [['id'], 'integer'],
            [['name'], 'string'],
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
        ];
    }
}
