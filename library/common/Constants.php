<?php
namespace common;

class Constants
{
    const SERVER = 'blueprint';
    const GLOBAL_NAMESPACE = 'blueprintGlobals';
    const LOCALHOST_IP = '127.0.0.1';
    const DOC_SERVER_URL = 'https://img.bisontransport.com';
    const DOC_SERVER_URL_NOSSL = 'http://img.bisontransport.com';
    //const DOC_SERVER_URL = 'http://img.local';
    const ENCRYPT_KEY = '6zEBmP4KAs';
    const COOKIE_KEY = '0DuHtj7TGkQqV';
    const SMTP_HOST = 'mail.corp.bisontransport.com';
    const EMP_IMAGE_URL = 'https://img.bisontransport.com/i/emp-[size]/[empId].jpg';
    const ELEARNING_COURSE_URL = 'http://img.bisontransport.com/public/eLearning/[SLUG]/story.html?userID=[EMPLOYEE_ID]';

    //SSL CRYPT
    const CIPHER = 'AES-256-CBC'; //cipher method
    const HASH = 'XrPq8tLj2RQ2mR8sg96tj44Uvmn6DM2ijrC'; //password
    const IV = 'F8z4988G84eu624x'; //initialization Vector

    // other paths
    const PATH_CACHE = '/data/cache/';
    const PATH_DATA = '/data';
    const PATH_LOGS = '/data/logs/';
    const PATH_TMP = '/runtime/tmp/';
    const PATH_TMP_IMAGEUPLOADER = '/data/tmp/imageuploader/';
    const PATH_TMP_JS = '/data/js-tmp/';
    const PATH_SESSIONS = '/data/session/';
    const PATH_UPLOAD = '/data/upload/';
    const PATH_TEMPLATE = '/data/template/';
    const PATH_TEMPLATE_CORE = '/data/template/core/';
    const PATH_IMAGEUPLOADER_WEB='web/';
    const PATH_IMAGEUPLOADER_PDF='pdf/';
    const PATH_IMAGEUPLOADER_ORIGINAL='original/';
    const PATH_IMAGEUPLOADER_TIFF='tiff/';

    const IMAGE_MAGICK_PATH = 'C:\\bin\\imagemagick\\ImageMagick-6.8.9-Q16\\';

    const FTP_EMP_PIC = '/public/emp_pic/';
    const FTP_ELEARNING = '/public/eLearning/';
    const FTP_NEIGHBORHOOD_WATCH = '/public/neighborhood_watch/';
    Const FTP_DOCS_ROOT='/public/manuals/';
    const FTP_OPERATIONS_DOCS = '/public/manuals/operations_docs/';
    const FTP_MAINTENANCE_DOCS = '/public/manuals/maintenance_docs/';
    const FTP_BISON_STORE = '/public/bison_store/';
    const FTP_EMP_BUILD_PIC = '/cache/';
    const FTP_INFO_PANEL_IMG = '/info_panel/';
    const FTP_USER_FILES = '/intranetTools/userfiles/';
    const FTP_TRAINING = '/internet/Intranet2007/kiosk/everyone/training/OLD/';
    const FTP_TRAINING_ALT_IMAGE = '/internet/Intranet2007/kiosk/everyone/training/TrainingImages/';
    const FTP_SETTLEMENT_SHEETS = '/resources/pdf/settlements/';
    const FTP_ATS = '/resources/ats/';
    const FTP_SAFETY = '/resources/safety_incident';
    const FTP_REVIEWS = '/resources/reviews/';
    const FTP_DRIVER_MEMOS = '/public/resources/pdf/memos/';
    const FTP_FUNDRAISERS_CHARITY_LOGOS = '/public/fundraisers/charity_logos/';
    const FTP_IMAGE_UPLOADER = '/resources/image_uploader/';

    const FTP_DATA_DUMP_STARTRAK = '/startrak/';

    const WWW_SETTLEMENT_SHEET = '/settlement_sheet/';

    // Pull Location
    const NETWORK_RESOURCE_ELEARNING = '\\\picserver\ELearning\\';
    const NETWORK_RESOURCE_OPERATIONS_DOCS = '\\\fileserver\J\msoffice\Operations\Operations Documentation\\';
    const NETWORK_RESOURCE_MAINTENANCE_DOCS = '\\\fileserver\J\msoffice\SHOP\Maintenance Documentation\\';
    const NETWORK_RESOURCE_STORE = '\\\picserver\Bison Store Products\\';
    const NETWORK_SETTLEMENT_SHEETS = '\\\fileserver\J\IMPORT\settlements\\';

//    const NETWORK_RESOURCE_EMPLOYEE_PIC = '\\\config\Intranet\Intranet\emppics\\';
    const NETWORK_RESOURCE_EMPLOYEE_PIC = '\\\FILESERVER\emppics\\';
//    const NETWORK_RESOURCE_DRIVER_PIC = '\\\config\Intranet\Intranet\drvpics\\';
    const NETWORK_RESOURCE_DRIVER_PIC = '\\\FILESERVER\drvpics\\';

//    const NETWORK_TRAINING_DOCUMENTS ='\\\config\Intranet\Intranet2007\kiosk\everyone\training\OLD\\';
//    const NETWORK_TRAINING_DOCUMENTS_ALT_IMAGE ='\\\config\Intranet\Intranet2007\kiosk\everyone\training\TrainingImages\\';
//    const NETWORK_USER_FILES ='\\\config\userfiles\\';
//    const NETWORK_WEB_SERVER_ROOT = '\\\config';
//    const NETWORK_WEB_IMAGE_ROOT = '\\\config\Intranet\Intranet2007\images';

    //error messages
    const ERROR_404 = 'Page Not Found';
    const ERROR_APPLICATION = 'Error occured. Look at the logs. If you can think of a better message
        that would be more appropriate to display please contact
        <a href = "mailto:webmaster@bisontransport.com">webmaster@bisontransport.com</a>';

    // site wide title
    const SITE_BASE = '/';
    const SITE_URL = 'http://webtop.local/';
    const SITE_URL_SSL = 'https://webtop.local/';

    const TITLE_BASE = 'Web Desktop';

    const REPLACE_SYMBOL = '^';

    // email
    const ADMIN_EMAIL = 'webmaster@bisontransport.com';
    const ADMIN_EMAIL_NAME = 'webmaster@bisontransport.com';

    const TECH_EMAIL = 'systems@bisontransport.com';
    const TECH_EMAIL_NAME = 'Systems';

    const SUPPORT_EMAIL = 'systemsupport@bisontransport.com';
    const SUPPORT_EMAIL_NAME = 'Systems Support';

    const NET_ADMIN_EMAIL = 'netadmin@bisontransport.com';
    const NET_ADMIN_EMAIL_NAME = 'Network Administrators';

    const WEB_AUTO_EMAIL = 'webautoemails@bisontransport.com';
    const WEB_AUTO_EMAIL_NAME = 'Automated Email';

    const WEB_TECH_EMAIL = 'webservices@bisontransport.com';
    const WEB_TECH_EMAIL_NAME = 'Web Services';

    const ONLINE_EMAIL = 'online@bisontransport.com';
    const ONLINE_EMAIL_NAME = 'Bison Transport Online';

    const HR_EMAIL = 'hr@bisontransport.com';
    const HR_EMAIL_NAME = 'HR';

    const BISON_U_EMAIL = 'bisonu@bisontransport.com';
    const BISON_U_EMAIL_NAME = 'BisonU';

    const PAYROLL_EMAIL = 'payroll@bisontransport.com';
    const PAYROLL_EMAIL_NAME = 'Payroll';

    const MECHANICS_PAYROLL_EMAIL = 'mechanicspayroll@bisontransport.com';
    const MECHANICS_PAYROLL_EMAIL_NAME = 'Mechanics Payroll';

    const ABL_EMAIL = 'abl@bisonabl.com';
    const ABL_EMAIL_NAME = 'Bison ABL';

    const ABL_TRACING_EMAIL = 'abltracing@bisontransport.com?';
    const ABL_TRACING_EMAIL_NAME = 'Bison ABL Tracing';

    const STORE_EMAIL = 'bisonstore@bisontransport.com';
    const STORE_EMAIL_NAME = 'Bison Store';

    const CSA_EMAIL = 'csa@bisontransport.com';
    const CSA_EMAIL_NAME = 'CSA';

    const CGC_EMAIL = 'CGC@bisontransport.com';
    const CGC_EMAIL_NAME = 'CGC';

    const DISPATCH_SUPER = 'Dispatch Supervisors';
    const DISPATCH_SUPER_EMAIL = 'DispatchSupervisors@bisontransport.com';

    const NEIGHBORHOOD_WATCH_EMAIL = 'NeighborhoodWatch@bisontransport.com';
    const NEIGHBORHOOD_WATCH_EMAIL_NAME = 'Neighborhood Watch';

    const DRIVER_DEVELOPMENT_EMAIL = 'driverdevelopment@bisontransport.com';
    const DRIVER_DEVELOPMENT_EMAIL_NAME = 'Driver Development';

    const DRIVER_SERVICES_EMAIL = 'driverservices@bisontransport.com';
    const DRIVER_SERVICES_EMAIL_NAME = 'Driver Services';

    const DRIVER_SERVICES_RECRUIT_EMAIL = 'drive@bisontransport.com';
    const DRIVER_SERVICES_RECRUIT_EMAIL_NAME = 'Driver Services Recruit';

    const SAFETY_INCIDENT_EMAIL = 'OnlineIncidentForms@bisontransport.com';
    const SAFETY_INCIDENT_EMAIL_NAME = 'Safety & Driver Development';

    const ACCIDENTS_CLAIMS_EMAIL = 'Accidents-Claims@bisontransport.com';
    const ACCIDENTS_CLAIMS_EMAIL_NAME = 'Accidents & Claims Department';

    const MAINTENANCE_EMAIL = 'IncidentReportingMaintenance@bisontransport.com';
    const MAINTENANCE_EMAIL_NAME = 'Maintenance';

    const PAYROLL_MANAGER_EMAIL = 'kbeauchamp@bisontransport.com';
    const PAYROLL_MANAGER_EMAIL_NAME = 'Kim Beauchamp';

    const PROPERTIES_TICKETS_EMAIL = 'PropertiesTickets@bisontransport.com';
    const PROPERTIES_TICKETS_EMAIL_NAME = 'Properties Tickets';

    const AUDIT_EMAIL = 'audit@bisontransport.com';
    const AUDIT_EMAIL_NAME = 'Audit';

    const SAFETY_COUNSELLORS_EMAIL = 'safetycouncellors@bisontransport.com';
    const SAFETY_COUNSELLORS_EMAIL_NAME = 'Safety Counsellors';

    const SAFETY_GROUP_EMAIL = 'safetygroup@bisontransport.com';
    const SAFETY_GROUP_EMAIL_NAME = 'Safety Group';

    const SOCIAL_EMAIL = 'social@bisontransport.com';
    const SOCIAL_EMAIL_NAME = 'Social';

    const RATE_DEPARTMENT_EMAIL = 'rate@bisontransport.com';
    const RATE_DEPARTMENT_EMAIL_NAME = 'Rate Department';

    const LAPD_EMAIL = 'LearningAndProcessImprovement@bisontransport.com';
    const LAPD_EMAIL_NAME = 'Learning and Process Improvement Department';

    const WPG_SHOP_MANAGER_EMAIL = 'wpg_shop.mgr@bisontransport.com';
    const WPG_SHOP_MANAGER_NAME = 'Winnipeg Shop Manager';

    const CGY_SHOP_MANAGER_EMAIL = 'cgy_shop.mgr@bisontransport.com';
    const CGY_SHOP_MANAGER_NAME = 'Calgary Shop Manager';

    const LAN_SHOP_MANAGER_EMAIL = 'LANShopManagers@bisontransport.com';
    const LAN_SHOP_MANAGER_NAME = 'Langley Shop Manager';

    const EDM_SHOP_MANAGER_EMAIL = 'EDMShopManagers@bisontransport.com';
    const EDM_SHOP_MANAGER_NAME = 'Edmonton Shop Manager';

    const MIS_SHOP_MANAGER_EMAIL = 'MISSShopManagers@bisontransport.com';
    const MIS_SHOP_MANAGER_NAME = 'Mississauga Shop Manager';

    const SHOP_OVERTIME_KPI_EMAIL = 'shopotkpi@bisontransport.com';
    const SHOP_OVERTIME_KPI_NAME = 'Shop Overtime KPI Email';

    const WPG_WASHBAY_EMAIL = 'wpgwashbay@bisontransport.com';
    const WPG_WASHBAY_NAME = 'Winnipeg Washbay';

    const WPG_REEFER_WASHOUTS_EMAIL = 'WPGReeferWashouts@bisontransport.com';
    const WPG_REEFER_WASHOUTS_NAME = 'WPG Reefer Washouts';

    const AP_FAILED_INTEGRATIONS_EMAIL = 'APFailedIntegrations@bisontransport.com';
    const AP_FAILED_INTEGRATIONS_NAME = 'AP Failed Integrations';

    const FUEL_DPT_EMAIL='fueldept@bisontransport.com';
    const FUEL_DPT_NAME='Fuel Department';

    // forms
    const CSRF_TTL = 1800;
    const CSRF_MISSING_TOKEN = 'Your form has expired, please submit the form again';
    const CSRF_NOT_SAME = 'Your form has expired, please submit the form again';

    //FTP
    const FTP_WWW_URL = '192.168.100.103';
    const FTP_WWW_USERNAME = 'administrator';
    const FTP_WWW_PASSWORD = 'tw11aaibp';

    //PHP SERVER
    //const FTP_WWW_URL = '192.168.60.60';
    //const FTP_WWW_USERNAME = 'web';
    //const FTP_WWW_PASSWORD = 'k3DaIy';

//    const FTP_WWW_DATA_URL = '192.168.60.60';
    const FTP_WWW_DATA_URL = '64.4.90.40';
    const FTP_WWW_DATA_USERNAME = 'bisonFtp';
    const FTP_WWW_DATA_PASSWORD = 'MlaDj92Ip';

    const WWW_IMG_URL = 'img.bisontransport.com';
    const FTP_IMG_URL = '192.168.101.103';
    const FTP_IMG_USERNAME = 'webadmin';
    const FTP_IMG_PASSWORD = 'tw11aaibp';

//    const FTP_DATA_URL = 'img.bisontransport.com';
    const FTP_DATA_URL = '192.168.101.103';
    const FTP_DATA_USERNAME = 'data_dump';
    const FTP_DATA_PASSWORD = 'Cv3gpe3f';

    const FTP_STARTRAK_URL = 'img.bisontransport.com';
    const FTP_STARTRAK_USERNAME = 'startrak';
    const FTP_STARTRAK_PASSWORD = 'Cv3gpe3f';

    const FTP_CERT_URL = '192.168.0.114';
    const FTP_CERT_USERNAME = 'administrator';
    const FTP_CERT_PASSWORD = 'tw11aaibp';

    const FTP_PROD_URL = '192.168.0.164';
    const FTP_PROD_USERNAME = 'administrator';
    const FTP_PROD_PASSWORD = 'tw11aaibp';

    const FTP_SCHED_URL = '192.168.0.119';
    const FTP_SCHED_USERNAME = 'administrator';
    const FTP_SCHED_PASSWORD = 'tw11aaibp';

    const CN_LOGIN_URL = 'https://ecprod.cn.ca/pkmslogin.form';
    const CN_USERNAME = 'bisonabl';
    const CN_PASSWORD = '1001sherwin';

    // google account
    const GOOGLE_USERNAME = 'webservices@bisontransport.com';
    const GOOGLE_PASSWORD = 'EC0AVqzK9sl';
    const GOOGLE_API_KEY = 'AIzaSyB9-4nanRzjDNYfRJZFAI_mx7gj5INluzE';
//    const GOOGLE_API_KEY_GET_LANT_LONG = 'AIzaSyAMy2zxrquRFXgZzVfReVbejLI2Q4ipw7k';
    const GOOGLE_API_KEY_GET_LANT_LONG = 'AIzaSyAiUrznDi17GJd2ZR55s1dLcc2TyeDFpWI';

    const GOOGLE_ANALYTICS_ACCOUNT = '';
    const GOOGLE_ANALYTICS_PROPERTY = 'bisontransport.com';

    //cache names
    const EMPLOYEE_NAMES = 'empNames';

    //Barc Reports
    const FTP_RESOURCE_PATH_BARC_REPORTS = "/resources/barc_reports/";

}