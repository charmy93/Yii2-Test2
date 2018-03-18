<?php

namespace common\models\db\table;

use Yii;
use yii\db\ActiveRecord;
use common\models\db\Schema;
use common\models\db\Tables;
/**
 * This is the model class for table "website_news".
 *
 * @property int $id
 * @property string $title
 * @property string $intro
 * @property string $description
 * @property string $start_date
 * @property string $end_date
 * @property string $modified_date
 * @property string $website
 * @property string $emp_id
 * @property int $is_external
 * @property string $external_url
 * @property int $is_active
 */
class WebsiteNews extends ActiveRecord
{
    const ADAPTER            = 'dbSqlserverBisonweb';    //db adapter
    const SCHEMA             = Schema::SQLSERVER_BISONWEB;
    const TABLE_NAME         = Tables::WEBSITE_NEWS;
    const ID                 = 'id';    //int(0, 0)
    const TITLE              = 'title';    //varchar(200, 0)
    const INTRO              = 'intro';    //varchar(255, 0)
    const DESCRIPTION        = 'description';    //text(0, 0)
    const START_DATE         = 'start_date';    //datetime(0, 0)
    const END_DATE           = 'end_date';    //datetime(0, 0)
    const MODIFIED_DATE      = 'modified_date';    //datetime(0, 0)
    const WEBSITE            = 'website';    //varchar(255, 0)
    const EMP_ID             = 'emp_id';    //varchar(10, 0)
    const IS_EXTERNAL        = 'is_external';    //tinyint(0, 0)
    const EXTERNAL_URL       = 'external_url';    //varchar(255, 0)
    const IS_ACTIVE          = 'is_active';    //tinyint(0, 0)
    const THUMBNAIL_URL       = 'thumbnail_url';    //varchar(255, 0)

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
            [['title', 'emp_id'], 'required'],
            [['title', 'intro', 'description', 'website', 'emp_id', 'external_url'], 'string'],
            [['start_date', 'end_date', 'modified_date'], 'safe'],
            [['is_external', 'is_active'], 'integer'],
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
            'intro' => 'Intro',
            'description' => 'Description',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'modified_date' => 'Modified Date',
            'website' => 'Website',
            'emp_id' => 'Emp ID',
            'is_external' => 'Is External',
            'external_url' => 'External Url',
            'is_active' => 'Is Active',
            'thumbnail_url' => 'Thumbnail Url',
        ];
    }
}
