<?php

namespace common\models\db\table;

use yii;
use yii\db\ActiveRecord;
use common\models\db\Schema;
use common\models\db\Tables;

/**
 * This is the model class for table "employee_list".
 */
class EmployeeList extends ActiveRecord
{
    const ADAPTER       = 'dbSqlserverBisonweb';    //db adapter
    const SCHEMA        = Schema::SQLSERVER_BISONWEB;
    const TABLE_NAME    = Tables::EMPLOYEE_LIST;
    const EMPLOYEE_ID    = 'employee_id';    //string
    const LOGIN_ID    = 'login_id';    //string
    const FIRST_NAME    = 'first_name';    //string
    const LAST_NAME    = 'last_name';    //string
    const FORMATTED_NAME    = 'formatted_name';    //string
    const FORMATTED_NAME_REVERSED    = 'formatted_name_reversed';    //string
    const AKA_NAME    = 'aka_name';    //string
    const ORG_LEVEL_ONE_NAME    = 'org_level_one_name';    //string
    const ORG_LEVEL_ONE_CODE    = 'org_level_one_code';    //string
    const ORG_LEVEL_TWO_NAME    = 'org_level_two_name';    //string
    const ORG_LEVEL_TWO_CODE    = 'org_level_two_code';    //string
    const ORG_LEVEL_THREE_NAME    = 'org_level_three_name';    //string
    const ORG_LEVEL_THREE_CODE    = 'org_level_three_code';    //string
    const ORGANIZATION_CODE    = 'organization_code';    //string
    const ORGANIZATION_NAME    = 'organization_name';    //string
    const JOB_TITLE    = 'job_title';    //string
    const JOB_CODE    = 'job_code';    //string
    const SHIFT    = 'shift';    //string
    const TERMINAL    = 'terminal';    //string
    const OFFICE_NUMBER    = 'office_number';    //string
    const EXTENSION    = 'extension';    //string
    const HOME_NUMBER    = 'home_number';    //string
    const CELL_NUMBER    = 'cell_number';    //string
    const EMAIL_ADDRESS    = 'email_address';    //string
    const FLEET    = 'fleet';    //string
    const PARKING_TAG    = 'parking_tag';    //string
    const IS_AFTER_HOURS    = 'is_after_hours';    //string
    const OUT_OF_OFFICE    = 'out_of_office';    //string
    const HIRED_DATE    = 'hired_date';    //string
    const BIRTH_DATE    = 'birth_date';    //string
    const STATUS    = 'status';    //string
    const TERMINATION_DATE    = 'termination_date';    //string
    const IS_SUPERVISOR    = 'is_supervisor';    //integer
    const SUPERVISORS    = 'supervisors';    //string
    const REPORTS_TO    = 'reports_to';    //string
    const DIRECTLY_REPORTS_TO    = 'directly_reports_to';    //string
    const TOUCH_DATE    = 'touch_date';    //string
    const IS_DRIVER_SUPERVISOR    = 'is_driver_supervisor';    //integer
    const IS_MECHANIC    = 'is_mechanic';    //integer
    const IS_WAREHOUSE    = 'is_warehouse';    //integer
    const LDAP_ID    = 'ldap_id';    //string

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

    public static function primaryKey()
    {
        return ['employee_id'];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'first_name', 'last_name', 'org_level_one_name', 'org_level_one_code', 'org_level_two_name', 'org_level_two_code', 'org_level_three_name', 'org_level_three_code'], 'required'],
            [['employee_id', 'login_id', 'first_name', 'last_name', 'formatted_name', 'formatted_name_reversed', 'aka_name', 'org_level_one_name', 'org_level_one_code', 'org_level_two_name', 'org_level_two_code', 'org_level_three_name', 'org_level_three_code', 'organization_code', 'organization_name', 'job_title', 'job_code', 'shift', 'terminal', 'office_number', 'extension', 'home_number', 'cell_number', 'email_address', 'fleet', 'parking_tag', 'is_after_hours', 'status', 'supervisors', 'reports_to', 'directly_reports_to', 'ldap_id'], 'string'],
            [['out_of_office', 'hired_date', 'birth_date', 'termination_date', 'touch_date'], 'safe'],
            [['is_supervisor', 'is_driver_supervisor', 'is_mechanic', 'is_warehouse'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'employee_id' => 'Employee ID',
            'login_id' => 'Login ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'formatted_name' => 'Formatted Name',
            'formatted_name_reversed' => 'Formatted Name Reversed',
            'aka_name' => 'Aka Name',
            'org_level_one_name' => 'Org Level One Name',
            'org_level_one_code' => 'Org Level One Code',
            'org_level_two_name' => 'Org Level Two Name',
            'org_level_two_code' => 'Org Level Two Code',
            'org_level_three_name' => 'Org Level Three Name',
            'org_level_three_code' => 'Org Level Three Code',
            'organization_code' => 'Organization Code',
            'organization_name' => 'Organization Name',
            'job_title' => 'Job Title',
            'job_code' => 'Job Code',
            'shift' => 'Shift',
            'terminal' => 'Terminal',
            'office_number' => 'Office Number',
            'extension' => 'Extension',
            'home_number' => 'Home Number',
            'cell_number' => 'Cell Number',
            'email_address' => 'Email Address',
            'fleet' => 'Fleet',
            'parking_tag' => 'Parking Tag',
            'is_after_hours' => 'Is After Hours',
            'out_of_office' => 'Out Of Office',
            'hired_date' => 'Hired Date',
            'birth_date' => 'Birth Date',
            'status' => 'Status',
            'termination_date' => 'Termination Date',
            'is_supervisor' => 'Is Supervisor',
            'supervisors' => 'Supervisors',
            'reports_to' => 'Reports To',
            'directly_reports_to' => 'Directly Reports To',
            'touch_date' => 'Touch Date',
            'is_driver_supervisor' => 'Is Driver Supervisor',
            'is_mechanic' => 'Is Mechanic',
            'is_warehouse' => 'Is Warehouse',
            'ldap_id' => 'Ldap ID',
        ];
    }
}