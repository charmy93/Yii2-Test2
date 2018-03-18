<?php

namespace common\models\db\table;

use yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use common\models\db\Schema;
use common\models\db\Tables;

/**
 * This is the model class for table "bison_carrierlogin".
 */
class BisonCarrierLogin extends ActiveRecord implements IdentityInterface
{
    const ADAPTER       = 'dbSqlserverPsbison';    //db adapter
    const SCHEMA        = Schema::SQLSERVER_PSBISON;
    const TABLE_NAME    = Tables::BISON_CARRIER_LOGIN;
    const ID    = 'ID';    //integer
    const USERID    = 'userID';    //string
    const PASSWORD    = 'Password';    //string
    const CARRIERID    = 'carrierID';    //string
    const FNAME    = 'fname';    //string
    const LNAME    = 'lname';    //string
    const PHONE    = 'phone';    //string
    const PHONE2    = 'phone2';    //string
    const NOTE    = 'Note';    //string
    const PASSWORD_RESET_DATE    = 'password_reset_date';    //string
    const PASSWORD_HISTORY    = 'password_history';    //string

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
            [['userID', 'Password', 'carrierID', 'fname', 'lname', 'phone', 'phone2', 'Note', 'password_history'], 'string'],
            [['password_reset_date'], 'required'],
            [['password_reset_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'userID' => 'User ID',
            'Password' => 'Password',
            'carrierID' => 'Carrier ID',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'phone' => 'Phone',
            'phone2' => 'Phone2',
            'Note' => 'Note',
            'password_reset_date' => 'Password Reset Date',
            'password_history' => 'Password History',
        ];
    }

    public static function findUser($userId)
    {
//        $session = Yii::$app->session;
//        return ($session->has('user')) ? new static($session->get('user')) : null;
        return static::findOne([self::USERID => $userId]);
    }

    /**
     * Finds an identity by the given ID.
     *
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface|null the identity object that matches the given ID.
     */
    public static function findIdentity($id)
    {
//        $session = Yii::$app->session;
//        return ($session->has('user')) ? new static($session->get('user')) : null;
        return static::findOne([self::ID => $id]);
    }

    /**
     * Finds an identity by the given token.
     *
     * @param string $token the token to be looked for
     * @return IdentityInterface|null the identity object that matches the given token.
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        //return static::findOne(['oauth' => $token]);
    }

    /**
     * @return int|string current user ID
     */
    public function getId()
    {
        return $this->{SELF::ID};
    }

    /**
     * @return string current user auth key
     */
    public function getAuthKey()
    {
//        return $this->oauth;
    }

    /**
     * @param string $authKey
     * @return bool if auth key is valid for current user
     */
    public function validateAuthKey($authKey)
    {
//        return $this->getAuthKey() === $authKey;
    }

    public function beforeSave($insert)
    {
//        if (parent::beforeSave($insert)) {
//            if ($this->isNewRecord) {
//                $this->oauth = \Yii::$app->security->generateRandomString();
//            }
//            return true;
//        }
//        return false;
    }

    public function validatePassword($password)
    {
        return ($password == $this->{BisonCarrierLogin::PASSWORD});
    }

    public function getProfileData()
    {
        $carrier = Carrier::findOne([Carrier::CAR_ID => $this->{BisonCarrierLogin::CARRIERID}]);
        $userIdentity = (object)[
            'auth_type' => 'carrier',
            'id' => $this->{BisonCarrierLogin::ID},
            'carrier_user_id' => $this->{BisonCarrierLogin::USERID},
            'password' => $this->{BisonCarrierLogin::PASSWORD},
            'name' => $this->{BisonCarrierLogin::FNAME} . ' ' . $this->{BisonCarrierLogin::LNAME},
            'first_name' => $this->{BisonCarrierLogin::FNAME},
            'last_name' => $this->{BisonCarrierLogin::LNAME},
            ''
        ];

        return $userIdentity;
    }
}