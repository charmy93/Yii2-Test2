<?php

namespace common\models\db\table;

use yii;
use yii\db\ActiveRecord;
use common\models\db\Schema;
use common\models\db\Tables;

/**
 * This is the model class for table "legheader".
 */
/**
 * @property AssetassignmentTourDtl[] $assetassignmentTourDtls
 */
class Legheader extends ActiveRecord
{
    const ADAPTER       = 'dbSqlserverPsbison';    //db adapter
    const SCHEMA        = Schema::SQLSERVER_PSBISON;
    const TABLE_NAME    = Tables::LEGHEADER;
    const LGH_NUMBER    = 'lgh_number';    //integer
    const LGH_FIRSTLEGNUMBER    = 'lgh_firstlegnumber';    //integer
    const LGH_LASTLEGNUMBER    = 'lgh_lastlegnumber';    //integer
    const LGH_DRVTRIPNUMBER    = 'lgh_drvtripnumber';    //integer
    const LGH_COST    = 'lgh_cost';    //double
    const LGH_REVENUE    = 'lgh_revenue';    //double
    const LGH_ODOMETERSTART    = 'lgh_odometerstart';    //integer
    const LGH_ODOMETEREND    = 'lgh_odometerend';    //integer
    const LGH_MILESSHORTEST    = 'lgh_milesshortest';    //integer
    const LGH_MILESPRACTICAL    = 'lgh_milespractical';    //integer
    const LGH_ALLOCFACTOR    = 'lgh_allocfactor';    //double
    const LGH_STARTDATE    = 'lgh_startdate';    //string
    const LGH_ENDDATE    = 'lgh_enddate';    //string
    const LGH_STARTCITY    = 'lgh_startcity';    //integer
    const LGH_ENDCITY    = 'lgh_endcity';    //integer
    const LGH_STARTREGION1    = 'lgh_startregion1';    //string
    const LGH_ENDREGION1    = 'lgh_endregion1';    //string
    const LGH_STARTSTATE    = 'lgh_startstate';    //string
    const LGH_ENDSTATE    = 'lgh_endstate';    //string
    const LGH_OUTSTATUS    = 'lgh_outstatus';    //string
    const LGH_STARTLAT    = 'lgh_startlat';    //integer
    const LGH_STARTLONG    = 'lgh_startlong';    //integer
    const LGH_ENDLAT    = 'lgh_endlat';    //integer
    const LGH_ENDLONG    = 'lgh_endlong';    //integer
    const LGH_CLASS1    = 'lgh_class1';    //string
    const LGH_CLASS2    = 'lgh_class2';    //string
    const LGH_CLASS3    = 'lgh_class3';    //string
    const LGH_CLASS4    = 'lgh_class4';    //string
    const STP_NUMBER_START    = 'stp_number_start';    //integer
    const STP_NUMBER_END    = 'stp_number_end';    //integer
    const CMP_ID_START    = 'cmp_id_start';    //string
    const CMP_ID_END    = 'cmp_id_end';    //string
    const LGH_STARTREGION2    = 'lgh_startregion2';    //string
    const LGH_STARTREGION3    = 'lgh_startregion3';    //string
    const LGH_STARTREGION4    = 'lgh_startregion4';    //string
    const LGH_ENDREGION2    = 'lgh_endregion2';    //string
    const LGH_ENDREGION3    = 'lgh_endregion3';    //string
    const LGH_ENDREGION4    = 'lgh_endregion4';    //string
    const LGH_INSTATUS    = 'lgh_instatus';    //string
    const LGH_DRIVER1    = 'lgh_driver1';    //string
    const LGH_DRIVER2    = 'lgh_driver2';    //string
    const LGH_TRACTOR    = 'lgh_tractor';    //string
    const LGH_PRIMARY_TRAILER    = 'lgh_primary_trailer';    //string
    const MOV_NUMBER    = 'mov_number';    //integer
    const FGT_NUMBER    = 'fgt_number';    //integer
    const LGH_PRIORITY    = 'lgh_priority';    //string
    const LGH_SCHDTEARLIEST    = 'lgh_schdtearliest';    //string
    const LGH_SCHDTLATEST    = 'lgh_schdtlatest';    //string
    const CMD_CODE    = 'cmd_code';    //string
    const FGT_DESCRIPTION    = 'fgt_description';    //string
    const MPP_TEAMLEADER    = 'mpp_teamleader';    //string
    const MPP_FLEET    = 'mpp_fleet';    //string
    const MPP_DIVISION    = 'mpp_division';    //string
    const MPP_DOMICILE    = 'mpp_domicile';    //string
    const MPP_COMPANY    = 'mpp_company';    //string
    const MPP_TERMINAL    = 'mpp_terminal';    //string
    const MPP_TYPE1    = 'mpp_type1';    //string
    const MPP_TYPE2    = 'mpp_type2';    //string
    const MPP_TYPE3    = 'mpp_type3';    //string
    const MPP_TYPE4    = 'mpp_type4';    //string
    const TRC_COMPANY    = 'trc_company';    //string
    const TRC_DIVISION    = 'trc_division';    //string
    const TRC_FLEET    = 'trc_fleet';    //string
    const TRC_TERMINAL    = 'trc_terminal';    //string
    const TRC_TYPE1    = 'trc_type1';    //string
    const TRC_TYPE2    = 'trc_type2';    //string
    const TRC_TYPE3    = 'trc_type3';    //string
    const TRC_TYPE4    = 'trc_type4';    //string
    const MFH_NUMBER    = 'mfh_number';    //integer
    const TRL_COMPANY    = 'trl_company';    //string
    const TRL_FLEET    = 'trl_fleet';    //string
    const TRL_DIVISION    = 'trl_division';    //string
    const TRL_TERMINAL    = 'trl_terminal';    //string
    const TRL_TYPE1    = 'trl_type1';    //string
    const TRL_TYPE2    = 'trl_type2';    //string
    const TRL_TYPE3    = 'trl_type3';    //string
    const TRL_TYPE4    = 'trl_type4';    //string
    const ORD_HDRNUMBER    = 'ord_hdrnumber';    //integer
    const TIMESTAMP    = 'timestamp';    //string
    const LGH_FUELTAXSTATUS    = 'lgh_fueltaxstatus';    //string
    const LGH_MTMILES    = 'lgh_mtmiles';    //integer
    const LGH_PRJDATE1    = 'lgh_prjdate1';    //string
    const LGH_ETAMINS1    = 'lgh_etamins1';    //integer
    const LGH_OUTOFROUTE_ROUTING    = 'lgh_outofroute_routing';    //string
    const LGH_TYPE1    = 'lgh_type1';    //string
    const LGH_ALLOC_REVENUE    = 'lgh_alloc_revenue';    //string
    const LGH_PRIMARY_PUP    = 'lgh_primary_pup';    //string
    const LGH_PROD_HR    = 'lgh_prod_hr';    //double
    const LGH_TOT_HR    = 'lgh_tot_hr';    //double
    const LGH_LD_UNLD_TIME    = 'lgh_ld_unld_time';    //double
    const LGH_LOAD_TIME    = 'lgh_load_time';    //double
    const LGH_STARTCTY_NMSTCT    = 'lgh_startcty_nmstct';    //string
    const LGH_ENDCTY_NMSTCT    = 'lgh_endcty_nmstct';    //string
    const LGH_CARRIER    = 'lgh_carrier';    //string
    const LGH_ACTIVE    = 'lgh_active';    //string
    const LGH_ENDDATE_ARRIVAL    = 'lgh_enddate_arrival';    //string
    const LGH_DSP_DATE    = 'lgh_dsp_date';    //string
    const LGH_GEO_DATE    = 'lgh_geo_date';    //string
    const LGH_NEXTTRAILER1    = 'lgh_nexttrailer1';    //string
    const LGH_NEXTTRAILER2    = 'lgh_nexttrailer2';    //string
    const LGH_ETAMILESTOFINAL    = 'lgh_etamilestofinal';    //integer
    const LGH_ETAMINTOFINAL    = 'lgh_etamintofinal';    //integer
    const LGH_LDMILES    = 'lgh_ldmiles';    //integer
    const LGH_MTMILE    = 'lgh_mtmile';    //integer
    const LGH_INVALIDMILES    = 'lgh_invalidmiles';    //integer
    const LGH_SPLIT_FLAG    = 'lgh_split_flag';    //string
    const LGH_CREATEDBY    = 'lgh_createdby';    //string
    const LGH_CREATEDON    = 'lgh_createdon';    //string
    const LGH_CREATEAPP    = 'lgh_createapp';    //string
    const LGH_UPDATEDBY    = 'lgh_updatedby';    //string
    const LGH_UPDATEDON    = 'lgh_updatedon';    //string
    const LGH_UPDATEAPP    = 'lgh_updateapp';    //string
    const LGH_CARRIERMILES    = 'lgh_carriermiles';    //integer
    const LGH_RSTARTDATE    = 'lgh_rstartdate';    //string
    const LGH_RENDDATE    = 'lgh_renddate';    //string
    const LGH_RSTARTCITY    = 'lgh_rstartcity';    //integer
    const LGH_RENDCITY    = 'lgh_rendcity';    //integer
    const LGH_RSTARTREGION1    = 'lgh_rstartregion1';    //string
    const LGH_RENDREGION1    = 'lgh_rendregion1';    //string
    const LGH_RSTARTSTATE    = 'lgh_rstartstate';    //string
    const LGH_RENDSTATE    = 'lgh_rendstate';    //string
    const LGH_RSTARTLAT    = 'lgh_rstartlat';    //integer
    const LGH_RSTARTLONG    = 'lgh_rstartlong';    //integer
    const LGH_RENDLAT    = 'lgh_rendlat';    //integer
    const LGH_RENDLONG    = 'lgh_rendlong';    //integer
    const STP_NUMBER_RSTART    = 'stp_number_rstart';    //integer
    const STP_NUMBER_REND    = 'stp_number_rend';    //integer
    const CMP_ID_RSTART    = 'cmp_id_rstart';    //string
    const CMP_ID_REND    = 'cmp_id_rend';    //string
    const LGH_RSTARTREGION2    = 'lgh_rstartregion2';    //string
    const LGH_RSTARTREGION3    = 'lgh_rstartregion3';    //string
    const LGH_RSTARTREGION4    = 'lgh_rstartregion4';    //string
    const LGH_RENDREGION2    = 'lgh_rendregion2';    //string
    const LGH_RENDREGION3    = 'lgh_rendregion3';    //string
    const LGH_RENDREGION4    = 'lgh_rendregion4';    //string
    const LGH_RSTARTCTY_NMSTCT    = 'lgh_rstartcty_nmstct';    //string
    const LGH_RENDCTY_NMSTCT    = 'lgh_rendcty_nmstct';    //string
    const LGH_FEETAVAILABLE    = 'lgh_feetavailable';    //integer
    const CAN_CAP_EXPIRES    = 'can_cap_expires';    //string
    const CAN_LD_EXPIRES    = 'can_ld_expires';    //string
    const LGH_DISPATCHDATE    = 'lgh_dispatchdate';    //string
    const LGH_ASSET_LOCK    = 'lgh_asset_lock';    //string
    const LGH_ASSET_LOCK_DTM    = 'lgh_asset_lock_dtm';    //string
    const LGH_ASSET_LOCK_USER    = 'lgh_asset_lock_user';    //string
    const BISON_ENVPREP    = 'bison_envprep';    //integer
    const DRVPLAN_NUMBER    = 'drvplan_number';    //integer
    const LGH_LOGISTICSMILES    = 'lgh_logisticsmiles';    //integer
    const LGH_USMILES    = 'lgh_usmiles';    //integer
    const BIS_PRIORLEGEND    = 'bis_priorlegend';    //string
    const LGH_TYPE2    = 'lgh_type2';    //string
    const LGH_TM_STATUS    = 'lgh_tm_status';    //string
    const LGH_TOUR_NUMBER    = 'lgh_tour_number';    //integer
    const LGH_ACTTRANSFERDATE    = 'lgh_acttransferdate';    //string
    const LGH_FUELBURNED    = 'lgh_fuelburned';    //string
    const LGH_ACTUALMILES    = 'lgh_actualmiles';    //string
    const LGH_TRIPHOURS    = 'lgh_triphours';    //string
    const LGH_FUELTAXSTATUSDATE    = 'lgh_fueltaxstatusdate';    //string
    const LGH_LOAD_ORIGIN    = 'lgh_load_origin';    //string
    const LGH_TRIPHOURS2    = 'lgh_triphours2';    //string
    const LGH_REFTYPE    = 'lgh_reftype';    //string
    const LGH_REFNUM    = 'lgh_refnum';    //string
    const LGH_COMMENT    = 'lgh_comment';    //string
    const LGH_MILES    = 'lgh_miles';    //integer
    const LGH_LINEHAUL    = 'lgh_linehaul';    //double
    const LGH_NOAUTOSPLIT    = 'lgh_noautosplit';    //integer
    const LGH_NOAUTOTRANSFER    = 'lgh_noautotransfer';    //integer
    const LGH_ORD_CHARGE    = 'lgh_ord_charge';    //double
    const LGH_ACT_WEIGHT    = 'lgh_act_weight';    //double
    const LGH_EST_WEIGHT    = 'lgh_est_weight';    //double
    const LGH_TOT_WEIGHT    = 'lgh_tot_weight';    //double
    const LGH_MAX_WEIGHT_EXCEEDED    = 'lgh_max_weight_exceeded';    //string
    const LGH_TMSTATUSSTOPNUMBER    = 'lgh_tmstatusstopnumber';    //integer
    const LGH_DETSTATUS    = 'lgh_detstatus';    //integer
    const LGH_TYPE3    = 'lgh_type3';    //string
    const LGH_TYPE4    = 'lgh_type4';    //string
    const LGH_MANUALLYSETTYPECLASS    = 'lgh_manuallysettypeclass';    //integer
    const LGH_ETACALCDATE    = 'lgh_etacalcdate';    //string
    const LGH_ETACOMMENT    = 'lgh_etacomment';    //string
    const LGH_ETA_CMP_LIST    = 'lgh_eta_cmp_list';    //string
    const ORD_BILLTO    = 'ord_billto';    //string
    const LGH_ORDER_SOURCE    = 'lgh_order_source';    //string
    const LGH_WASHPLAN    = 'lgh_washplan';    //string
    const LGH_HZD_CMD_CLASS    = 'lgh_hzd_cmd_class';    //string
    const LGH_ACTTRANSFER    = 'lgh_acttransfer';    //string
    const LGH_BOOKED_REVTYPE1    = 'lgh_booked_revtype1';    //string
    const LGH_ORIGINZIP    = 'lgh_originzip';    //string
    const LGH_DESTZIP    = 'lgh_destzip';    //string
    const LGH_ROUTE    = 'lgh_route';    //string
    const LGH_204STATUS    = 'lgh_204status';    //string
    const LGH_204DATE    = 'lgh_204date';    //string
    const LGH_PERMIT_STATUS    = 'lgh_permit_status';    //string
    const LGH_TRC_COMMENT    = 'lgh_trc_comment';    //string
    const LGH_ACE_STATUS    = 'lgh_ace_status';    //string
    const LGH_TYPE5    = 'lgh_type5';    //string
    const SHIFT_SS_ID    = 'shift_ss_id';    //integer
    const LGH_SHIFTDATE    = 'lgh_shiftdate';    //string
    const LGH_SHIFTNUMBER    = 'lgh_shiftnumber';    //string
    const LGH_MPP_TYPE_EDITDATETIME    = 'lgh_mpp_type_editdatetime';    //string
    const MPP2_TYPE1    = 'mpp2_type1';    //string
    const MPP2_TYPE2    = 'mpp2_type2';    //string
    const MPP2_TYPE3    = 'mpp2_type3';    //string
    const MPP2_TYPE4    = 'mpp2_type4';    //string
    const LGH_CAR_TOTALCHARGE    = 'lgh_car_totalcharge';    //string
    const LGH_CHASSIS    = 'lgh_chassis';    //string
    const LGH_CHASSIS2    = 'lgh_chassis2';    //string
    const LGH_RECOMMENDED_CAR_ID    = 'lgh_recommended_car_id';    //string
    const LGH_PERMITNUMBERS    = 'lgh_permitnumbers';    //string
    const LGH_PERMITBY    = 'lgh_permitby';    //string
    const LGH_PERMITDATE    = 'lgh_permitdate';    //string
    const LGH_ETAALERT1    = 'lgh_etaalert1';    //string
    const LGH_ETA_EST_STARTDATE    = 'lgh_eta_est_startdate';    //string
    const LGH_ETA_EST_ENDDATE    = 'lgh_eta_est_enddate';    //string
    const LGH_ETA_NEXT_PICKUP    = 'lgh_eta_next_pickup';    //string
    const LGH_ETA_NEXT_DROP    = 'lgh_eta_next_drop';    //string
    const LGH_204_TRADINGPARTNER    = 'lgh_204_tradingpartner';    //string
    const LGH_TOTAL_MOV_BILL_MILES    = 'lgh_total_mov_bill_miles';    //integer
    const LGH_TOTAL_MOV_MILES    = 'lgh_total_mov_miles';    //integer
    const LGH_MILE_OVERAGE_MESSAGE    = 'lgh_mile_overage_message';    //string
    const LGH_CAR_RATE    = 'lgh_car_rate';    //string
    const LGH_CAR_CHARGE    = 'lgh_car_charge';    //string
    const LGH_CAR_ACCESSORIALS    = 'lgh_car_accessorials';    //string
    const LGH_SPOT_RATE_UPDATEDBY    = 'lgh_spot_rate_updatedby';    //string
    const LGH_SPOT_RATE_UPDATEDDT    = 'lgh_spot_rate_updateddt';    //string
    const LGH_SPOT_RATE    = 'lgh_spot_rate';    //string
    const LGH_SHIP_STATUS    = 'lgh_ship_status';    //string
    const LGH_PROTECTED_RATE    = 'lgh_protected_rate';    //string
    const LGH_AVG_RATE    = 'lgh_avg_rate';    //string
    const LGH_EDI_COUNTER    = 'lgh_edi_counter';    //string
    const LGH_ACC_SO1    = 'lgh_acc_so1';    //string
    const LGH_ACC_SO2    = 'lgh_acc_so2';    //string
    const LGH_ACC_SO3    = 'lgh_acc_so3';    //string
    const LGH_ACC_SO4    = 'lgh_acc_so4';    //string
    const LGH_ACC_SO5    = 'lgh_acc_so5';    //string
    const LGH_ACC_SO6    = 'lgh_acc_so6';    //string
    const LGH_RATE_DT    = 'lgh_rate_dt';    //string
    const LGH_ACC_FSC    = 'lgh_acc_fsc';    //string
    const LGH_RATE_ERROR    = 'lgh_rate_error';    //string
    const LGH_RATE_ERROR_DESC    = 'lgh_rate_error_desc';    //string
    const LGH_FAXEMAIL_CREATED    = 'lgh_faxemail_created';    //string
    const LGH_EXTERNALRATING_MILES    = 'lgh_externalrating_miles';    //integer
    const LGH_RTD_ID    = 'lgh_rtd_id';    //integer
    const LGH_PREV_SEG_STATUS    = 'lgh_prev_seg_status';    //string
    const LGH_PREV_SEG_STATUS_LAST_UPDATED    = 'lgh_prev_seg_status_last_updated';    //string
    const LGH_RAILDISPATCHSTATUS    = 'lgh_raildispatchstatus';    //string
    const LGH_204VALIDATE    = 'lgh_204validate';    //integer
    const MA_TRANSACTION_ID    = 'ma_transaction_id';    //string
    const MA_TOUR_NUMBER    = 'ma_tour_number';    //integer
    const MA_TOUR_SEQUENCE    = 'ma_tour_sequence';    //integer
    const MA_MPP_ID    = 'ma_mpp_id';    //string
    const MA_TRC_NUMBER    = 'ma_trc_number';    //string
    const LGH_RAILTEMPLATEDETAIL_ID    = 'lgh_railtemplatedetail_id';    //integer
    const LGH_DOLLY    = 'lgh_dolly';    //string
    const LGH_DOLLY2    = 'lgh_dolly2';    //string
    const LGH_TRAILER3    = 'lgh_trailer3';    //string
    const LGH_TRAILER4    = 'lgh_trailer4';    //string
    const LGH_PLANDATE    = 'lgh_plandate';    //string
    const LGH_OTHER_STATUS1    = 'lgh_other_status1';    //string
    const LGH_OTHER_STATUS2    = 'lgh_other_status2';    //string
    const RAILSERVICELEVEL    = 'RailServiceLevel';    //string
    const LGH_LANEID    = 'lgh_laneid';    //integer
    const LGH_EXTRAINFO1    = 'lgh_extrainfo1';    //string
    const LGH_EXTRAINFO2    = 'lgh_extrainfo2';    //string
    const LGH_EXTRAINFO3    = 'lgh_extrainfo3';    //string
    const LGH_RAILSCHEDULE_ID    = 'lgh_railschedule_id';    //integer
    const LGH_DIRECT_ROUTE_STATUS1    = 'lgh_direct_route_status1';    //string
    const LGH_OPTIMIZATIONDATE    = 'lgh_optimizationdate';    //string
    const TRC_TEAMLEADER    = 'trc_teamleader';    //string
    const LGH_PAYTERMCODE    = 'lgh_payTermCode';    //string

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
            [['lgh_number', 'lgh_noautosplit', 'lgh_noautotransfer'], 'required'],
            [['lgh_number', 'lgh_firstlegnumber', 'lgh_lastlegnumber', 'lgh_drvtripnumber', 'lgh_odometerstart', 'lgh_odometerend', 'lgh_milesshortest', 'lgh_milespractical', 'lgh_startcity', 'lgh_endcity', 'lgh_startlat', 'lgh_startlong', 'lgh_endlat', 'lgh_endlong', 'stp_number_start', 'stp_number_end', 'mov_number', 'fgt_number', 'mfh_number', 'ord_hdrnumber', 'lgh_mtmiles', 'lgh_etamins1', 'lgh_etamilestofinal', 'lgh_etamintofinal', 'lgh_ldmiles', 'lgh_mtmile', 'lgh_invalidmiles', 'lgh_carriermiles', 'lgh_rstartcity', 'lgh_rendcity', 'lgh_rstartlat', 'lgh_rstartlong', 'lgh_rendlat', 'lgh_rendlong', 'stp_number_rstart', 'stp_number_rend', 'lgh_feetavailable', 'bison_envprep', 'drvplan_number', 'lgh_logisticsmiles', 'lgh_usmiles', 'lgh_tour_number', 'lgh_miles', 'lgh_noautosplit', 'lgh_noautotransfer', 'lgh_tmstatusstopnumber', 'lgh_detstatus', 'lgh_manuallysettypeclass', 'shift_ss_id', 'lgh_total_mov_bill_miles', 'lgh_total_mov_miles', 'lgh_externalrating_miles', 'lgh_rtd_id', 'lgh_204validate', 'ma_transaction_id', 'ma_tour_number', 'ma_tour_sequence', 'lgh_railtemplatedetail_id', 'lgh_laneid', 'lgh_railschedule_id'], 'integer'],
            [['lgh_cost', 'lgh_revenue', 'lgh_allocfactor', 'lgh_alloc_revenue', 'lgh_prod_hr', 'lgh_tot_hr', 'lgh_ld_unld_time', 'lgh_load_time', 'lgh_fuelburned', 'lgh_actualmiles', 'lgh_triphours', 'lgh_triphours2', 'lgh_linehaul', 'lgh_ord_charge', 'lgh_act_weight', 'lgh_est_weight', 'lgh_tot_weight', 'lgh_car_totalcharge', 'lgh_car_rate', 'lgh_car_charge', 'lgh_car_accessorials', 'lgh_protected_rate', 'lgh_avg_rate', 'lgh_acc_so1', 'lgh_acc_so2', 'lgh_acc_so3', 'lgh_acc_so4', 'lgh_acc_so5', 'lgh_acc_so6', 'lgh_acc_fsc'], 'number'],
            [['lgh_startdate', 'lgh_enddate', 'lgh_schdtearliest', 'lgh_schdtlatest', 'timestamp', 'lgh_prjdate1', 'lgh_enddate_arrival', 'lgh_dsp_date', 'lgh_geo_date', 'lgh_createdon', 'lgh_updatedon', 'lgh_rstartdate', 'lgh_renddate', 'can_cap_expires', 'can_ld_expires', 'lgh_dispatchdate', 'lgh_asset_lock_dtm', 'bis_priorlegend', 'lgh_acttransferdate', 'lgh_fueltaxstatusdate', 'lgh_etacalcdate', 'lgh_204date', 'lgh_shiftdate', 'lgh_mpp_type_editdatetime', 'lgh_permitdate', 'lgh_eta_est_startdate', 'lgh_eta_est_enddate', 'lgh_eta_next_pickup', 'lgh_eta_next_drop', 'lgh_spot_rate_updateddt', 'lgh_rate_dt', 'lgh_prev_seg_status_last_updated', 'lgh_plandate', 'lgh_optimizationdate'], 'safe'],
            [['lgh_startregion1', 'lgh_endregion1', 'lgh_startstate', 'lgh_endstate', 'lgh_outstatus', 'lgh_class1', 'lgh_class2', 'lgh_class3', 'lgh_class4', 'cmp_id_start', 'cmp_id_end', 'lgh_startregion2', 'lgh_startregion3', 'lgh_startregion4', 'lgh_endregion2', 'lgh_endregion3', 'lgh_endregion4', 'lgh_instatus', 'lgh_driver1', 'lgh_driver2', 'lgh_tractor', 'lgh_primary_trailer', 'lgh_priority', 'cmd_code', 'fgt_description', 'mpp_teamleader', 'mpp_fleet', 'mpp_division', 'mpp_domicile', 'mpp_company', 'mpp_terminal', 'mpp_type1', 'mpp_type2', 'mpp_type3', 'mpp_type4', 'trc_company', 'trc_division', 'trc_fleet', 'trc_terminal', 'trc_type1', 'trc_type2', 'trc_type3', 'trc_type4', 'trl_company', 'trl_fleet', 'trl_division', 'trl_terminal', 'trl_type1', 'trl_type2', 'trl_type3', 'trl_type4', 'lgh_fueltaxstatus', 'lgh_outofroute_routing', 'lgh_type1', 'lgh_primary_pup', 'lgh_startcty_nmstct', 'lgh_endcty_nmstct', 'lgh_carrier', 'lgh_active', 'lgh_nexttrailer1', 'lgh_nexttrailer2', 'lgh_split_flag', 'lgh_createdby', 'lgh_createapp', 'lgh_updatedby', 'lgh_updateapp', 'lgh_rstartregion1', 'lgh_rendregion1', 'lgh_rstartstate', 'lgh_rendstate', 'cmp_id_rstart', 'cmp_id_rend', 'lgh_rstartregion2', 'lgh_rstartregion3', 'lgh_rstartregion4', 'lgh_rendregion2', 'lgh_rendregion3', 'lgh_rendregion4', 'lgh_rstartcty_nmstct', 'lgh_rendcty_nmstct', 'lgh_asset_lock', 'lgh_asset_lock_user', 'lgh_type2', 'lgh_tm_status', 'lgh_load_origin', 'lgh_reftype', 'lgh_refnum', 'lgh_comment', 'lgh_max_weight_exceeded', 'lgh_type3', 'lgh_type4', 'lgh_etacomment', 'lgh_eta_cmp_list', 'ord_billto', 'lgh_order_source', 'lgh_washplan', 'lgh_hzd_cmd_class', 'lgh_acttransfer', 'lgh_booked_revtype1', 'lgh_originzip', 'lgh_destzip', 'lgh_route', 'lgh_204status', 'lgh_permit_status', 'lgh_trc_comment', 'lgh_ace_status', 'lgh_type5', 'lgh_shiftnumber', 'mpp2_type1', 'mpp2_type2', 'mpp2_type3', 'mpp2_type4', 'lgh_chassis', 'lgh_chassis2', 'lgh_recommended_car_id', 'lgh_permitnumbers', 'lgh_permitby', 'lgh_etaalert1', 'lgh_204_tradingpartner', 'lgh_mile_overage_message', 'lgh_spot_rate_updatedby', 'lgh_spot_rate', 'lgh_ship_status', 'lgh_edi_counter', 'lgh_rate_error', 'lgh_rate_error_desc', 'lgh_faxemail_created', 'lgh_prev_seg_status', 'lgh_raildispatchstatus', 'ma_mpp_id', 'ma_trc_number', 'lgh_dolly', 'lgh_dolly2', 'lgh_trailer3', 'lgh_trailer4', 'lgh_other_status1', 'lgh_other_status2', 'RailServiceLevel', 'lgh_extrainfo1', 'lgh_extrainfo2', 'lgh_extrainfo3', 'lgh_direct_route_status1', 'trc_teamleader', 'lgh_payTermCode'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lgh_number' => 'Lgh Number',
            'lgh_firstlegnumber' => 'Lgh Firstlegnumber',
            'lgh_lastlegnumber' => 'Lgh Lastlegnumber',
            'lgh_drvtripnumber' => 'Lgh Drvtripnumber',
            'lgh_cost' => 'Lgh Cost',
            'lgh_revenue' => 'Lgh Revenue',
            'lgh_odometerstart' => 'Lgh Odometerstart',
            'lgh_odometerend' => 'Lgh Odometerend',
            'lgh_milesshortest' => 'Lgh Milesshortest',
            'lgh_milespractical' => 'Lgh Milespractical',
            'lgh_allocfactor' => 'Lgh Allocfactor',
            'lgh_startdate' => 'Lgh Startdate',
            'lgh_enddate' => 'Lgh Enddate',
            'lgh_startcity' => 'Lgh Startcity',
            'lgh_endcity' => 'Lgh Endcity',
            'lgh_startregion1' => 'Lgh Startregion1',
            'lgh_endregion1' => 'Lgh Endregion1',
            'lgh_startstate' => 'Lgh Startstate',
            'lgh_endstate' => 'Lgh Endstate',
            'lgh_outstatus' => 'Lgh Outstatus',
            'lgh_startlat' => 'Lgh Startlat',
            'lgh_startlong' => 'Lgh Startlong',
            'lgh_endlat' => 'Lgh Endlat',
            'lgh_endlong' => 'Lgh Endlong',
            'lgh_class1' => 'Lgh Class1',
            'lgh_class2' => 'Lgh Class2',
            'lgh_class3' => 'Lgh Class3',
            'lgh_class4' => 'Lgh Class4',
            'stp_number_start' => 'Stp Number Start',
            'stp_number_end' => 'Stp Number End',
            'cmp_id_start' => 'Cmp Id Start',
            'cmp_id_end' => 'Cmp Id End',
            'lgh_startregion2' => 'Lgh Startregion2',
            'lgh_startregion3' => 'Lgh Startregion3',
            'lgh_startregion4' => 'Lgh Startregion4',
            'lgh_endregion2' => 'Lgh Endregion2',
            'lgh_endregion3' => 'Lgh Endregion3',
            'lgh_endregion4' => 'Lgh Endregion4',
            'lgh_instatus' => 'Lgh Instatus',
            'lgh_driver1' => 'Lgh Driver1',
            'lgh_driver2' => 'Lgh Driver2',
            'lgh_tractor' => 'Lgh Tractor',
            'lgh_primary_trailer' => 'Lgh Primary Trailer',
            'mov_number' => 'Mov Number',
            'fgt_number' => 'Fgt Number',
            'lgh_priority' => 'Lgh Priority',
            'lgh_schdtearliest' => 'Lgh Schdtearliest',
            'lgh_schdtlatest' => 'Lgh Schdtlatest',
            'cmd_code' => 'Cmd Code',
            'fgt_description' => 'Fgt Description',
            'mpp_teamleader' => 'Mpp Teamleader',
            'mpp_fleet' => 'Mpp Fleet',
            'mpp_division' => 'Mpp Division',
            'mpp_domicile' => 'Mpp Domicile',
            'mpp_company' => 'Mpp Company',
            'mpp_terminal' => 'Mpp Terminal',
            'mpp_type1' => 'Mpp Type1',
            'mpp_type2' => 'Mpp Type2',
            'mpp_type3' => 'Mpp Type3',
            'mpp_type4' => 'Mpp Type4',
            'trc_company' => 'Trc Company',
            'trc_division' => 'Trc Division',
            'trc_fleet' => 'Trc Fleet',
            'trc_terminal' => 'Trc Terminal',
            'trc_type1' => 'Trc Type1',
            'trc_type2' => 'Trc Type2',
            'trc_type3' => 'Trc Type3',
            'trc_type4' => 'Trc Type4',
            'mfh_number' => 'Mfh Number',
            'trl_company' => 'Trl Company',
            'trl_fleet' => 'Trl Fleet',
            'trl_division' => 'Trl Division',
            'trl_terminal' => 'Trl Terminal',
            'trl_type1' => 'Trl Type1',
            'trl_type2' => 'Trl Type2',
            'trl_type3' => 'Trl Type3',
            'trl_type4' => 'Trl Type4',
            'ord_hdrnumber' => 'Ord Hdrnumber',
            'timestamp' => 'Timestamp',
            'lgh_fueltaxstatus' => 'Lgh Fueltaxstatus',
            'lgh_mtmiles' => 'Lgh Mtmiles',
            'lgh_prjdate1' => 'Lgh Prjdate1',
            'lgh_etamins1' => 'Lgh Etamins1',
            'lgh_outofroute_routing' => 'Lgh Outofroute Routing',
            'lgh_type1' => 'Lgh Type1',
            'lgh_alloc_revenue' => 'Lgh Alloc Revenue',
            'lgh_primary_pup' => 'Lgh Primary Pup',
            'lgh_prod_hr' => 'Lgh Prod Hr',
            'lgh_tot_hr' => 'Lgh Tot Hr',
            'lgh_ld_unld_time' => 'Lgh Ld Unld Time',
            'lgh_load_time' => 'Lgh Load Time',
            'lgh_startcty_nmstct' => 'Lgh Startcty Nmstct',
            'lgh_endcty_nmstct' => 'Lgh Endcty Nmstct',
            'lgh_carrier' => 'Lgh Carrier',
            'lgh_active' => 'Lgh Active',
            'lgh_enddate_arrival' => 'Lgh Enddate Arrival',
            'lgh_dsp_date' => 'Lgh Dsp Date',
            'lgh_geo_date' => 'Lgh Geo Date',
            'lgh_nexttrailer1' => 'Lgh Nexttrailer1',
            'lgh_nexttrailer2' => 'Lgh Nexttrailer2',
            'lgh_etamilestofinal' => 'Lgh Etamilestofinal',
            'lgh_etamintofinal' => 'Lgh Etamintofinal',
            'lgh_ldmiles' => 'Lgh Ldmiles',
            'lgh_mtmile' => 'Lgh Mtmile',
            'lgh_invalidmiles' => 'Lgh Invalidmiles',
            'lgh_split_flag' => 'Lgh Split Flag',
            'lgh_createdby' => 'Lgh Createdby',
            'lgh_createdon' => 'Lgh Createdon',
            'lgh_createapp' => 'Lgh Createapp',
            'lgh_updatedby' => 'Lgh Updatedby',
            'lgh_updatedon' => 'Lgh Updatedon',
            'lgh_updateapp' => 'Lgh Updateapp',
            'lgh_carriermiles' => 'Lgh Carriermiles',
            'lgh_rstartdate' => 'Lgh Rstartdate',
            'lgh_renddate' => 'Lgh Renddate',
            'lgh_rstartcity' => 'Lgh Rstartcity',
            'lgh_rendcity' => 'Lgh Rendcity',
            'lgh_rstartregion1' => 'Lgh Rstartregion1',
            'lgh_rendregion1' => 'Lgh Rendregion1',
            'lgh_rstartstate' => 'Lgh Rstartstate',
            'lgh_rendstate' => 'Lgh Rendstate',
            'lgh_rstartlat' => 'Lgh Rstartlat',
            'lgh_rstartlong' => 'Lgh Rstartlong',
            'lgh_rendlat' => 'Lgh Rendlat',
            'lgh_rendlong' => 'Lgh Rendlong',
            'stp_number_rstart' => 'Stp Number Rstart',
            'stp_number_rend' => 'Stp Number Rend',
            'cmp_id_rstart' => 'Cmp Id Rstart',
            'cmp_id_rend' => 'Cmp Id Rend',
            'lgh_rstartregion2' => 'Lgh Rstartregion2',
            'lgh_rstartregion3' => 'Lgh Rstartregion3',
            'lgh_rstartregion4' => 'Lgh Rstartregion4',
            'lgh_rendregion2' => 'Lgh Rendregion2',
            'lgh_rendregion3' => 'Lgh Rendregion3',
            'lgh_rendregion4' => 'Lgh Rendregion4',
            'lgh_rstartcty_nmstct' => 'Lgh Rstartcty Nmstct',
            'lgh_rendcty_nmstct' => 'Lgh Rendcty Nmstct',
            'lgh_feetavailable' => 'Lgh Feetavailable',
            'can_cap_expires' => 'Can Cap Expires',
            'can_ld_expires' => 'Can Ld Expires',
            'lgh_dispatchdate' => 'Lgh Dispatchdate',
            'lgh_asset_lock' => 'Lgh Asset Lock',
            'lgh_asset_lock_dtm' => 'Lgh Asset Lock Dtm',
            'lgh_asset_lock_user' => 'Lgh Asset Lock User',
            'bison_envprep' => 'Bison Envprep',
            'drvplan_number' => 'Drvplan Number',
            'lgh_logisticsmiles' => 'Lgh Logisticsmiles',
            'lgh_usmiles' => 'Lgh Usmiles',
            'bis_priorlegend' => 'Bis Priorlegend',
            'lgh_type2' => 'Lgh Type2',
            'lgh_tm_status' => 'Lgh Tm Status',
            'lgh_tour_number' => 'Lgh Tour Number',
            'lgh_acttransferdate' => 'Lgh Acttransferdate',
            'lgh_fuelburned' => 'Lgh Fuelburned',
            'lgh_actualmiles' => 'Lgh Actualmiles',
            'lgh_triphours' => 'Lgh Triphours',
            'lgh_fueltaxstatusdate' => 'Lgh Fueltaxstatusdate',
            'lgh_load_origin' => 'Lgh Load Origin',
            'lgh_triphours2' => 'Lgh Triphours2',
            'lgh_reftype' => 'Lgh Reftype',
            'lgh_refnum' => 'Lgh Refnum',
            'lgh_comment' => 'Lgh Comment',
            'lgh_miles' => 'Lgh Miles',
            'lgh_linehaul' => 'Lgh Linehaul',
            'lgh_noautosplit' => 'Lgh Noautosplit',
            'lgh_noautotransfer' => 'Lgh Noautotransfer',
            'lgh_ord_charge' => 'Lgh Ord Charge',
            'lgh_act_weight' => 'Lgh Act Weight',
            'lgh_est_weight' => 'Lgh Est Weight',
            'lgh_tot_weight' => 'Lgh Tot Weight',
            'lgh_max_weight_exceeded' => 'Lgh Max Weight Exceeded',
            'lgh_tmstatusstopnumber' => 'Lgh Tmstatusstopnumber',
            'lgh_detstatus' => 'Lgh Detstatus',
            'lgh_type3' => 'Lgh Type3',
            'lgh_type4' => 'Lgh Type4',
            'lgh_manuallysettypeclass' => 'Lgh Manuallysettypeclass',
            'lgh_etacalcdate' => 'Lgh Etacalcdate',
            'lgh_etacomment' => 'Lgh Etacomment',
            'lgh_eta_cmp_list' => 'Lgh Eta Cmp List',
            'ord_billto' => 'Ord Billto',
            'lgh_order_source' => 'Lgh Order Source',
            'lgh_washplan' => 'Lgh Washplan',
            'lgh_hzd_cmd_class' => 'Lgh Hzd Cmd Class',
            'lgh_acttransfer' => 'Lgh Acttransfer',
            'lgh_booked_revtype1' => 'Lgh Booked Revtype1',
            'lgh_originzip' => 'Lgh Originzip',
            'lgh_destzip' => 'Lgh Destzip',
            'lgh_route' => 'Lgh Route',
            'lgh_204status' => 'Lgh 204status',
            'lgh_204date' => 'Lgh 204date',
            'lgh_permit_status' => 'Lgh Permit Status',
            'lgh_trc_comment' => 'Lgh Trc Comment',
            'lgh_ace_status' => 'Lgh Ace Status',
            'lgh_type5' => 'Lgh Type5',
            'shift_ss_id' => 'Shift Ss ID',
            'lgh_shiftdate' => 'Lgh Shiftdate',
            'lgh_shiftnumber' => 'Lgh Shiftnumber',
            'lgh_mpp_type_editdatetime' => 'Lgh Mpp Type Editdatetime',
            'mpp2_type1' => 'Mpp2 Type1',
            'mpp2_type2' => 'Mpp2 Type2',
            'mpp2_type3' => 'Mpp2 Type3',
            'mpp2_type4' => 'Mpp2 Type4',
            'lgh_car_totalcharge' => 'Lgh Car Totalcharge',
            'lgh_chassis' => 'Lgh Chassis',
            'lgh_chassis2' => 'Lgh Chassis2',
            'lgh_recommended_car_id' => 'Lgh Recommended Car ID',
            'lgh_permitnumbers' => 'Lgh Permitnumbers',
            'lgh_permitby' => 'Lgh Permitby',
            'lgh_permitdate' => 'Lgh Permitdate',
            'lgh_etaalert1' => 'Lgh Etaalert1',
            'lgh_eta_est_startdate' => 'Lgh Eta Est Startdate',
            'lgh_eta_est_enddate' => 'Lgh Eta Est Enddate',
            'lgh_eta_next_pickup' => 'Lgh Eta Next Pickup',
            'lgh_eta_next_drop' => 'Lgh Eta Next Drop',
            'lgh_204_tradingpartner' => 'Lgh 204 Tradingpartner',
            'lgh_total_mov_bill_miles' => 'Lgh Total Mov Bill Miles',
            'lgh_total_mov_miles' => 'Lgh Total Mov Miles',
            'lgh_mile_overage_message' => 'Lgh Mile Overage Message',
            'lgh_car_rate' => 'Lgh Car Rate',
            'lgh_car_charge' => 'Lgh Car Charge',
            'lgh_car_accessorials' => 'Lgh Car Accessorials',
            'lgh_spot_rate_updatedby' => 'Lgh Spot Rate Updatedby',
            'lgh_spot_rate_updateddt' => 'Lgh Spot Rate Updateddt',
            'lgh_spot_rate' => 'Lgh Spot Rate',
            'lgh_ship_status' => 'Lgh Ship Status',
            'lgh_protected_rate' => 'Lgh Protected Rate',
            'lgh_avg_rate' => 'Lgh Avg Rate',
            'lgh_edi_counter' => 'Lgh Edi Counter',
            'lgh_acc_so1' => 'Lgh Acc So1',
            'lgh_acc_so2' => 'Lgh Acc So2',
            'lgh_acc_so3' => 'Lgh Acc So3',
            'lgh_acc_so4' => 'Lgh Acc So4',
            'lgh_acc_so5' => 'Lgh Acc So5',
            'lgh_acc_so6' => 'Lgh Acc So6',
            'lgh_rate_dt' => 'Lgh Rate Dt',
            'lgh_acc_fsc' => 'Lgh Acc Fsc',
            'lgh_rate_error' => 'Lgh Rate Error',
            'lgh_rate_error_desc' => 'Lgh Rate Error Desc',
            'lgh_faxemail_created' => 'Lgh Faxemail Created',
            'lgh_externalrating_miles' => 'Lgh Externalrating Miles',
            'lgh_rtd_id' => 'Lgh Rtd ID',
            'lgh_prev_seg_status' => 'Lgh Prev Seg Status',
            'lgh_prev_seg_status_last_updated' => 'Lgh Prev Seg Status Last Updated',
            'lgh_raildispatchstatus' => 'Lgh Raildispatchstatus',
            'lgh_204validate' => 'Lgh 204validate',
            'ma_transaction_id' => 'Ma Transaction ID',
            'ma_tour_number' => 'Ma Tour Number',
            'ma_tour_sequence' => 'Ma Tour Sequence',
            'ma_mpp_id' => 'Ma Mpp ID',
            'ma_trc_number' => 'Ma Trc Number',
            'lgh_railtemplatedetail_id' => 'Lgh Railtemplatedetail ID',
            'lgh_dolly' => 'Lgh Dolly',
            'lgh_dolly2' => 'Lgh Dolly2',
            'lgh_trailer3' => 'Lgh Trailer3',
            'lgh_trailer4' => 'Lgh Trailer4',
            'lgh_plandate' => 'Lgh Plandate',
            'lgh_other_status1' => 'Lgh Other Status1',
            'lgh_other_status2' => 'Lgh Other Status2',
            'RailServiceLevel' => 'Rail Service Level',
            'lgh_laneid' => 'Lgh Laneid',
            'lgh_extrainfo1' => 'Lgh Extrainfo1',
            'lgh_extrainfo2' => 'Lgh Extrainfo2',
            'lgh_extrainfo3' => 'Lgh Extrainfo3',
            'lgh_railschedule_id' => 'Lgh Railschedule ID',
            'lgh_direct_route_status1' => 'Lgh Direct Route Status1',
            'lgh_optimizationdate' => 'Lgh Optimizationdate',
            'trc_teamleader' => 'Trc Teamleader',
            'lgh_payTermCode' => 'Lgh Pay Term Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssetassignmentTourDtls()
    {
        return $this->hasMany(AssetassignmentTourDtl::className(), ['lgh_number' => 'lgh_number']);
    }
}