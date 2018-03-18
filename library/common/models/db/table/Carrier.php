<?php

namespace common\models\db\table;

use yii;
use yii\db\ActiveRecord;
use common\models\db\Schema;
use common\models\db\Tables;

/**
 * This is the model class for table "carrier".
 */
/**
 * @property CarrierMoreSettings[] $carrierMoreSettings
 */
class Carrier extends ActiveRecord
{
    const ADAPTER       = 'dbSqlserverPsbison';    //db adapter
    const SCHEMA        = Schema::SQLSERVER_PSBISON;
    const TABLE_NAME    = Tables::CARRIER;
    const CAR_ID    = 'car_id';    //string
    const CAR_NAME    = 'car_name';    //string
    const CAR_FEDID    = 'car_fedid';    //string
    const CAR_ADDRESS1    = 'car_address1';    //string
    const CAR_ADDRESS2    = 'car_address2';    //string
    const CTY_CODE    = 'cty_code';    //integer
    const CAR_ZIP    = 'car_zip';    //string
    const PTO_ID    = 'pto_id';    //string
    const CAR_SCAC    = 'car_scac';    //string
    const CAR_CONTACT    = 'car_contact';    //string
    const CAR_TYPE1    = 'car_type1';    //string
    const CAR_TYPE2    = 'car_type2';    //string
    const CAR_TYPE3    = 'car_type3';    //string
    const CAR_TYPE4    = 'car_type4';    //string
    const CAR_MISC1    = 'car_misc1';    //string
    const CAR_MISC2    = 'car_misc2';    //string
    const CAR_MISC3    = 'car_misc3';    //string
    const CAR_MISC4    = 'car_misc4';    //string
    const CAR_PHONE1    = 'car_phone1';    //string
    const CAR_PHONE2    = 'car_phone2';    //string
    const CAR_PHONE3    = 'car_phone3';    //string
    const CAR_LASTACTIVITY    = 'car_lastactivity';    //string
    const CAR_ACTG_TYPE    = 'car_actg_type';    //string
    const CAR_ICCNUM    = 'car_iccnum';    //string
    const CAR_CONTRACT    = 'car_contract';    //string
    const CAR_OTHERID    = 'car_otherid';    //string
    const CAR_USECASHCARD    = 'car_usecashcard';    //string
    const CAR_STATUS    = 'car_status';    //string
    const CAR_BOARD    = 'car_board';    //string
    const CAR_UPDATEDBY    = 'car_updatedby';    //string
    const CAR_UPDATEDDATE    = 'car_updateddate';    //string
    const CAR_CREATEDATE    = 'car_createdate';    //string
    const CAR_EXP1_DATE    = 'car_exp1_date';    //string
    const CAR_EXP2_DATE    = 'car_exp2_date';    //string
    const CAR_TERMINATIONDT    = 'car_terminationdt';    //string
    const CAR_EMAIL    = 'car_email';    //string
    const CAR_SERVICE_LOCATION    = 'car_service_location';    //string
    const CAR_CURRENCY    = 'car_currency';    //string
    const CAR_COUNTRY    = 'car_country';    //string
    const CAR_GP_CLASS    = 'car_gp_class';    //string
    const CAR_AGENT    = 'car_agent';    //string
    const YTDCOUNT    = 'YTDcount';    //integer
    const YTDLATES    = 'YTDlates';    //integer
    const PREVYEARCOUNT    = 'prevYearCount';    //integer
    const PREVYEARLATES    = 'prevYearLates';    //integer
    const CAR_TRLTYPE1    = 'car_trltype1';    //string
    const CAR_TRLTYPE2    = 'car_trltype2';    //string
    const CAR_TRLTYPE3    = 'car_trltype3';    //string
    const CAR_TRLTYPE4    = 'car_trltype4';    //string
    const CAR_INS_CARGOLIMITS    = 'car_ins_cargolimits';    //integer
    const CAR_INS_LIABILITYLIMITS    = 'car_ins_liabilitylimits';    //integer
    const CAR_INS_CERTIFICATE    = 'car_ins_certificate';    //string
    const CAR_INS_W9    = 'car_ins_w9';    //string
    const CAR_INS_CONTRACT    = 'car_ins_contract';    //string
    const CAR_EXP1_ENDDATE    = 'car_exp1_enddate';    //string
    const CAR_EXP2_ENDDATE    = 'car_exp2_enddate';    //string
    const CAR_RATING    = 'car_rating';    //string
    const CAR_BRANCH    = 'car_branch';    //string
    const CAR_DOTNUM    = 'car_dotnum';    //string
    const CAR_204FLAG    = 'car_204flag';    //integer
    const CAR_210FLAG    = 'car_210flag';    //integer
    const CAR_214FLAG    = 'car_214flag';    //integer
    const CAR_QUICKENTRY    = 'car_quickentry';    //string
    const CAR_LOADS_OFFERED    = 'car_loads_offered';    //integer
    const CAR_LOADS_RESPONDED_TO    = 'car_loads_responded_to';    //integer
    const CAR_LOADS_NOT_RESPONDED_TO    = 'car_loads_not_responded_to';    //integer
    const CAR_LOADS_AWARDED    = 'car_loads_awarded';    //integer
    const CAR_LOADS_ON_TIME    = 'car_loads_on_time';    //integer
    const CAR_CONFIRMPRINT    = 'car_confirmprint';    //integer
    const CAR_CONFIRMFAX    = 'car_confirmfax';    //integer
    const CAR_CONFIRMEMAIL    = 'car_confirmemail';    //integer
    const CAR_CONFIRMPATHNAME    = 'car_confirmpathname';    //string
    const CAR_411_MONITORED    = 'car_411_monitored';    //string
    const CAR_CONFIRM_IR_ID    = 'car_confirm_ir_id';    //integer
    const CAR_CONFIRM_IRK_ID    = 'car_confirm_irk_id';    //integer
    const CAR_CONFIRM_TYPE    = 'car_confirm_type';    //string
    const CAR_204TENDER    = 'car_204tender';    //string
    const CAR_204UPDATE    = 'car_204update';    //string
    const CAR_EXTEQUIP_INTERVAL_WARNLEVEL    = 'car_extequip_interval_warnlevel';    //string
    const CAR_EXTEQUIP_INTERVAL_HOURS    = 'car_extequip_interval_hours';    //integer
    const CAR_EXTEQUIP_INTERVAL_MAXCOUNT    = 'car_extequip_interval_maxcount';    //integer
    const CAR_FGT_PAY_TERMS    = 'car_fgt_pay_terms';    //string
    const CAR_HAZMAT    = 'car_hazmat';    //integer
    const CAR_APPROVAL_DT    = 'car_approval_dt';    //string
    const CAR_SUB_ICCNUM    = 'car_sub_iccnum';    //string
    const CAR_EFT_FLAG    = 'car_eft_flag';    //integer
    const CAR_WEB_ADDRESS    = 'car_web_address';    //string
    const CAR_REGION_TYPE    = 'car_region_type';    //string
    const CAR_MANAGER    = 'car_manager';    //string
    const CAR_TIER_RATING    = 'car_tier_rating';    //string
    const CAR_TENDERLOADBY    = 'car_tenderloadby';    //string
    const CAR_204VALIDATE    = 'car_204validate';    //integer
    const ROWSEC_RSRV_ID    = 'rowsec_rsrv_id';    //integer
    const CAR_CRMTYPE    = 'car_CRMType';    //string
    const DW_TIMESTAMP    = 'dw_timestamp';    //string
    const CAR_MT_TYPE_LOADED    = 'car_mt_type_loaded';    //string
    const CAR_MT_TYPE_EMPTY    = 'car_mt_type_empty';    //string
    const CAR_204_CANCEL_NEW    = 'car_204_cancel_new';    //integer
    const CAR_FUEL_CARD_ACCOUNT_ID    = 'car_fuel_card_account_id';    //string
    const CAR_FUEL_CARD_PAY_TYPE    = 'car_fuel_card_pay_type';    //string
    const CAR_REPORT_URL    = 'car_report_url';    //string
    const PAYSCHEDULEID    = 'PayScheduleId';    //integer
    const CAR_DISPATCH_COMPUTE_ON_SAVE    = 'car_dispatch_compute_on_save';    //string

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
            [['car_id', 'car_name', 'car_currency', 'car_gp_class', 'car_agent', 'car_quickentry', 'dw_timestamp'], 'required'],
            [['car_id', 'car_name', 'car_fedid', 'car_address1', 'car_address2', 'car_zip', 'pto_id', 'car_scac', 'car_contact', 'car_type1', 'car_type2', 'car_type3', 'car_type4', 'car_misc1', 'car_misc2', 'car_misc3', 'car_misc4', 'car_phone1', 'car_phone2', 'car_phone3', 'car_actg_type', 'car_iccnum', 'car_contract', 'car_otherid', 'car_usecashcard', 'car_status', 'car_board', 'car_updatedby', 'car_email', 'car_service_location', 'car_currency', 'car_country', 'car_gp_class', 'car_agent', 'car_trltype1', 'car_trltype2', 'car_trltype3', 'car_trltype4', 'car_ins_certificate', 'car_ins_w9', 'car_ins_contract', 'car_rating', 'car_branch', 'car_dotnum', 'car_quickentry', 'car_confirmpathname', 'car_411_monitored', 'car_confirm_type', 'car_204tender', 'car_204update', 'car_extequip_interval_warnlevel', 'car_fgt_pay_terms', 'car_sub_iccnum', 'car_web_address', 'car_region_type', 'car_manager', 'car_tier_rating', 'car_tenderloadby', 'car_CRMType', 'car_mt_type_loaded', 'car_mt_type_empty', 'car_fuel_card_account_id', 'car_fuel_card_pay_type', 'car_report_url', 'car_dispatch_compute_on_save'], 'string'],
            [['cty_code', 'YTDcount', 'YTDlates', 'prevYearCount', 'prevYearLates', 'car_ins_cargolimits', 'car_ins_liabilitylimits', 'car_204flag', 'car_210flag', 'car_214flag', 'car_loads_offered', 'car_loads_responded_to', 'car_loads_not_responded_to', 'car_loads_awarded', 'car_loads_on_time', 'car_confirmprint', 'car_confirmfax', 'car_confirmemail', 'car_confirm_ir_id', 'car_confirm_irk_id', 'car_extequip_interval_hours', 'car_extequip_interval_maxcount', 'car_hazmat', 'car_eft_flag', 'car_204validate', 'rowsec_rsrv_id', 'car_204_cancel_new', 'PayScheduleId'], 'integer'],
            [['car_lastactivity', 'car_updateddate', 'car_createdate', 'car_exp1_date', 'car_exp2_date', 'car_terminationdt', 'car_exp1_enddate', 'car_exp2_enddate', 'car_approval_dt', 'dw_timestamp'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'car_id' => 'Car ID',
            'car_name' => 'Car Name',
            'car_fedid' => 'Car Fedid',
            'car_address1' => 'Car Address1',
            'car_address2' => 'Car Address2',
            'cty_code' => 'Cty Code',
            'car_zip' => 'Car Zip',
            'pto_id' => 'Pto ID',
            'car_scac' => 'Car Scac',
            'car_contact' => 'Car Contact',
            'car_type1' => 'Car Type1',
            'car_type2' => 'Car Type2',
            'car_type3' => 'Car Type3',
            'car_type4' => 'Car Type4',
            'car_misc1' => 'Car Misc1',
            'car_misc2' => 'Car Misc2',
            'car_misc3' => 'Car Misc3',
            'car_misc4' => 'Car Misc4',
            'car_phone1' => 'Car Phone1',
            'car_phone2' => 'Car Phone2',
            'car_phone3' => 'Car Phone3',
            'car_lastactivity' => 'Car Lastactivity',
            'car_actg_type' => 'Car Actg Type',
            'car_iccnum' => 'Car Iccnum',
            'car_contract' => 'Car Contract',
            'car_otherid' => 'Car Otherid',
            'car_usecashcard' => 'Car Usecashcard',
            'car_status' => 'Car Status',
            'car_board' => 'Car Board',
            'car_updatedby' => 'Car Updatedby',
            'car_updateddate' => 'Car Updateddate',
            'car_createdate' => 'Car Createdate',
            'car_exp1_date' => 'Car Exp1 Date',
            'car_exp2_date' => 'Car Exp2 Date',
            'car_terminationdt' => 'Car Terminationdt',
            'car_email' => 'Car Email',
            'car_service_location' => 'Car Service Location',
            'car_currency' => 'Car Currency',
            'car_country' => 'Car Country',
            'car_gp_class' => 'Car Gp Class',
            'car_agent' => 'Car Agent',
            'YTDcount' => 'Ytdcount',
            'YTDlates' => 'Ytdlates',
            'prevYearCount' => 'Prev Year Count',
            'prevYearLates' => 'Prev Year Lates',
            'car_trltype1' => 'Car Trltype1',
            'car_trltype2' => 'Car Trltype2',
            'car_trltype3' => 'Car Trltype3',
            'car_trltype4' => 'Car Trltype4',
            'car_ins_cargolimits' => 'Car Ins Cargolimits',
            'car_ins_liabilitylimits' => 'Car Ins Liabilitylimits',
            'car_ins_certificate' => 'Car Ins Certificate',
            'car_ins_w9' => 'Car Ins W9',
            'car_ins_contract' => 'Car Ins Contract',
            'car_exp1_enddate' => 'Car Exp1 Enddate',
            'car_exp2_enddate' => 'Car Exp2 Enddate',
            'car_rating' => 'Car Rating',
            'car_branch' => 'Car Branch',
            'car_dotnum' => 'Car Dotnum',
            'car_204flag' => 'Car 204flag',
            'car_210flag' => 'Car 210flag',
            'car_214flag' => 'Car 214flag',
            'car_quickentry' => 'Car Quickentry',
            'car_loads_offered' => 'Car Loads Offered',
            'car_loads_responded_to' => 'Car Loads Responded To',
            'car_loads_not_responded_to' => 'Car Loads Not Responded To',
            'car_loads_awarded' => 'Car Loads Awarded',
            'car_loads_on_time' => 'Car Loads On Time',
            'car_confirmprint' => 'Car Confirmprint',
            'car_confirmfax' => 'Car Confirmfax',
            'car_confirmemail' => 'Car Confirmemail',
            'car_confirmpathname' => 'Car Confirmpathname',
            'car_411_monitored' => 'Car 411 Monitored',
            'car_confirm_ir_id' => 'Car Confirm Ir ID',
            'car_confirm_irk_id' => 'Car Confirm Irk ID',
            'car_confirm_type' => 'Car Confirm Type',
            'car_204tender' => 'Car 204tender',
            'car_204update' => 'Car 204update',
            'car_extequip_interval_warnlevel' => 'Car Extequip Interval Warnlevel',
            'car_extequip_interval_hours' => 'Car Extequip Interval Hours',
            'car_extequip_interval_maxcount' => 'Car Extequip Interval Maxcount',
            'car_fgt_pay_terms' => 'Car Fgt Pay Terms',
            'car_hazmat' => 'Car Hazmat',
            'car_approval_dt' => 'Car Approval Dt',
            'car_sub_iccnum' => 'Car Sub Iccnum',
            'car_eft_flag' => 'Car Eft Flag',
            'car_web_address' => 'Car Web Address',
            'car_region_type' => 'Car Region Type',
            'car_manager' => 'Car Manager',
            'car_tier_rating' => 'Car Tier Rating',
            'car_tenderloadby' => 'Car Tenderloadby',
            'car_204validate' => 'Car 204validate',
            'rowsec_rsrv_id' => 'Rowsec Rsrv ID',
            'car_CRMType' => 'Car  Crmtype',
            'dw_timestamp' => 'Dw Timestamp',
            'car_mt_type_loaded' => 'Car Mt Type Loaded',
            'car_mt_type_empty' => 'Car Mt Type Empty',
            'car_204_cancel_new' => 'Car 204 Cancel New',
            'car_fuel_card_account_id' => 'Car Fuel Card Account ID',
            'car_fuel_card_pay_type' => 'Car Fuel Card Pay Type',
            'car_report_url' => 'Car Report Url',
            'PayScheduleId' => 'Pay Schedule ID',
            'car_dispatch_compute_on_save' => 'Car Dispatch Compute On Save',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarrierMoreSettings()
    {
        return $this->hasMany(CarrierMoreSettings::className(), ['resource_id' => 'car_id']);
    }
}