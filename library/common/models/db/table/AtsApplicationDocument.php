<?php

namespace common\models\db\table;

use common\models\db\Schema;
use common\models\db\Tables;
use Yii;

/**
 * This is the model class for table "ats_application_document".
 *
 * @property integer $id
 * @property integer $application_id
 * @property integer $person_id
 * @property string $type
 * @property string $mime
 * @property integer $length
 * @property string $ext
 * @property string $hash
 * @property integer $original_person_id
 */
class AtsApplicationDocument extends \yii\db\ActiveRecord
{
    const ADAPTER                       = 'dbSqlimageBisonweb';         //db adapter
    const SCHEMA                        =  Schema::SQLIMAGE_BISONWEB;
    const TABLE_NAME                    =  Tables::ATS_APPLICATION_DOCUMENT;
    const ID                            = 'id';    //int(0)
    const APPLICATION_ID                = 'application_id';    //int(0)
    const PERSON_ID                     = 'person_id';    //int(0)
    const TYPE                          = 'type';    //varchar(25)
    const MIME                          = 'mime';    //varchar(100)
    const LENGTH                        = 'length';    //int(0)
    const EXT                           = 'ext';    //varchar(10)
    const HASH                          = 'hash';    //text(0)
    const ORIGINAL_PERSON_ID            = 'original_person_id';    //int(0)

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return self::SCHEMA . '.' . self::TABLE_NAME;
    }

    public static function primaryKey()
    {
      //  return parent::primaryKey(); // TODO: Change the autogenerated stub
        return [self::ID];
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
            [['application_id', 'person_id', 'length', 'original_person_id'], 'integer'],
            [['type', 'mime', 'ext', 'hash'], 'string'],
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
            'application_id' => 'Application ID',
            'person_id' => 'Person ID',
            'type' => 'Type',
            'mime' => 'Mime',
            'length' => 'Length',
            'ext' => 'Ext',
            'hash' => 'Hash',
            'original_person_id' => 'Original Person ID',
        ];
    }
}
