<?php

/*
 | --------------------------------------------------------------------
 | App Namespace
 | --------------------------------------------------------------------
 |
 | This defines the default Namespace that is used throughout
 | CodeIgniter to refer to the Application directory. Change
 | this constant to change the namespace that all application
 | classes should use.
 |
 | NOTE: changing this will require manually modifying the
 | existing namespaces of App\* namespaced-classes.
 */
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
 | --------------------------------------------------------------------------
 | Composer Path
 | --------------------------------------------------------------------------
 |
 | The path that Composer's autoload file is expected to live. By default,
 | the vendor folder is in the Root directory, but you can customize that here.
 */
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
 |--------------------------------------------------------------------------
 | Timing Constants
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to work with the myriad of PHP functions that
 | require information to be in seconds.
 */
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2592000);
defined('YEAR')   || define('YEAR', 31536000);
defined('DECADE') || define('DECADE', 315360000);

/*
 | --------------------------------------------------------------------------
 | Exit Status Codes
 | --------------------------------------------------------------------------
 |
 | Used to indicate the conditions under which the script is exit()ing.
 | While there is no universal standard for error codes, there are some
 | broad conventions.  Three such conventions are mentioned below, for
 | those who wish to make use of them.  The CodeIgniter defaults were
 | chosen for the least overlap with these conventions, while still
 | leaving room for others to be defined in future versions and user
 | applications.
 |
 | The three main conventions used for determining exit status codes
 | are as follows:
 |
 |    Standard C/C++ Library (stdlibc):
 |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
 |       (This link also contains other GNU-specific conventions)
 |    BSD sysexits.h:
 |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 |    Bash scripting:
 |       http://tldp.org/LDP/abs/html/exitcodes.html
 |
 */
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0);        // no errors
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1);          // generic error
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3);         // configuration error
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4);   // file not found
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5);  // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7);     // invalid user input
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8);       // database error
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9);      // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125);    // highest automatically-assigned error code

/**
 * @deprecated Use \CodeIgniter\Events\Events::PRIORITY_LOW instead.
 */
define('EVENT_PRIORITY_LOW', 200);

/**
 * @deprecated Use \CodeIgniter\Events\Events::PRIORITY_NORMAL instead.
 */
define('EVENT_PRIORITY_NORMAL', 100);

/**
 * @deprecated Use \CodeIgniter\Events\Events::PRIORITY_HIGH instead.
 */
define('EVENT_PRIORITY_HIGH', 10);


// Start write here icmis 27-Aug-2023

/*define('SMS_KEY', 'sdjkfgbsjh$1232_12nmnh');//key for 67 server kjuy@98123_-fgbvgAD and key for 60 server sdjkfgbsjh$1232_12nmnh
define('SMS_API_IP', '10.2');//to push sms access ip*/
define('SMS_KEY', 'kjuy@98123_-fgbvgAD');//key for 67 & 29 server kjuy@98123_-fgbvgAD and key for 60 server sdjkfgbsjh$1232_12nmnh
define('SMS_API_IP', '10.25.78.5');//to push sms access ip
/*sms templates*/
define('SCISMS_GENERIC_TEMPLATE','1107161243622980738');
define('SCISMS_COPYING_APPLICATION_DELIVERED','1107161243456951452');
define('SCISMS_COPYING_APPLICATION_DISPATCH','1107161243451962063');
define('SCISMS_COPYING_DEFECT_FOUND','1107161243443625778');
define('SCISMS_COPYING_APPLICATION_REGISTRATION','1107161243437551558');
define('SCISMS_COMPLAINT_ASSIGNMENT','1107161243404349482');
define('SCISMS_OUR_PEOPLE_ACCOUNT','1107161243222885208');
define('SCISMS_SALARY_NOTIFICATION','1107161243217840201');
define('SCISMS_CASH_ACCOUNT_OTP','1107161243211319986');
define('SCISMS_PAPERBOOK_RI_JUDGE_RESIDENCE','1107161243204831777');
define('SCISMS_PAPERBOOK_RI_GODOWN','1107161243199246877');
define('SCISMS_GRIEVANCE_WRIT_PETITION','1107161243191296798');
define('SCISMS_GRIEVANCE_TRANSFER_BAR_COUNCIL','1107161243185446906');
define('SCISMS_GRIEVANCE_FORWARDED_SECTION','1107161243178467678');
define('SCISMS_GRIEVANCE_FORWARD_REPORT','1107161243173106684');
define('SCISMS_GRIEVANCE_COPY_FOWARDED','1107161243166287442');
define('SCISMS_GRIEVANCE_SUBJUDICE_MATTER','1107161243160186430');
define('SCISMS_GRIEVANCE_NO_ACTION','1107161243154208023');
define('SCISMS_GRIEVANCE_ARTICLE_235','1107161243148975839');
define('SCISMS_GRIEVANCE_VISIT_WEBSITE','1107161243142625534');
define('SCISMS_GRIEVANCE_COMPLETE_FACTS','1107161243133394568');
define('SCISMS_GRIEVANCE_FATE_CONVEYED','1107161243122261156');
define('SCISMS_GRIEVANCE_LEGAL_RECOURSE','1107161243115348334');
define('SCISMS_GRIEVANCE_TP_RETURN_REQUEST','1107161243108554880');
define('SCISMS_GRIEVANCE_TRANSFER_PETITION','1107161243101406355');
define('SCISMS_GRIEVANCE_LETTER_FORWARDED_SCLSC','1107161243094245809');
define('SCISMS_GRIEVANCE_APPROACH_SCLSC','1107161243088367408');
define('SCISMS_GRIEVANCE_APPROACH_COURT','1107161243082205857');
define('SCISMS_GRIEVANCE_REPETITIVE','1107161243074421372');
define('SCISMS_GRIEVANCE_INCOMPREHENSIBLE','1107161243065540526');
define('SCISMS_GRIEVANCE_EMAIL_UNSIGNED','1107161243060817022');
define('SCISMS_GRIEVANCE_INCOMPLETE_ADDRESS','1107161243054908462');
define('SCISMS_GRIEVANCE_ANONYMOUS','1107161243048102363');
define('SCISMS_GRIEVANCE_UNSIGNED','1107161243043518094');
define('SCISMS_GRIEVANCE_IMPROPER_ADDRESSED','1107161243038586331');
define('SCISMS_GRIEVEANCE_NOT_COVERED_PIL','1107161243033590430');
define('SCISMS_GRIEVANCE_REGISTRATION','1107161243020678365');
define('SCISMS_PHYSICAL_HEARING_LOGIN_OTP','1107161242971352833');
define('SCISMS_POSCO_LOGIN_OTP','1107161242965868002');
define('SCISMS_COURT_ESTABLISHMENT','1107161242961347372');
define('SCISMS_EFILING_TRAINING_REGISTRATION','1107161242955736557');
define('SCISMS_TASK_TOMORROW_LAST_DAY','1107161242947463802');
define('SCISMS_TASK_EXTRA_TIME_REQUIRED','1107161242942121587');
define('SCISMS_TASK_WITHDRAWAL','1107161242936195817');
define('SCISMS_TASK_ASSIGNMENT','1107161242928338390');
define('SCISMS_Likely_Listed','1107161234657171594');
define('SCISMS_Soft_Petition_Required','1107161234636441155');
define('SCISMS_Case_Registration','1107161234623646257');
define('SCISMS_Still_Defective','1107161234619089003');
define('SCISMS_Defect_Registration','1107161234614078466');
define('SCISMS_AOR_Registration','1107161234609750003');
define('SCISMS_Case_Filed_Diary_No','1107161234603870863');
define('SCISMS_Urgent_Important','1107161234596418789');
define('SCISMS_Important_Noturgent','1107161234592744362');
define('SCISMS_Urgent_NotImportant','1107161234587795392');
define('SCISMS_Letter_Forwarded','1107161234584143012');
define('SCISMS_Ementioning_OTP','1107161234553363660');
define('SCISMS_Diary_Listing','1107161234546630797');
define('SCISMS_Document_Filed_In_Diary','1107161234537876841');
define('SCISMS_New_Mobile_No_Validation','1107161234531487479');
define('SCISMS_Account_Rejection','1107161234525271661');
define('SCISMS_Account_Activation','1107161234520255425');
define('SCISMS_Efiling_Profile_Update','1107161234513632595');
define('SCISMS_Efiling_Role_Assignment','1107161234507765891');
define('SCISMS_Efiling_Trashed','1107161234498468173');
define('SCISMS_Efiling_refiled','1107161234490061028');
define('SCISMS_Submission_after_defect_curing','1107161234484745434');
define('SCISMS_Submit_Pending','1107161234458319159');
define('SCISMS_Efiling_No_Generated','1107161234452460708');
define('SCISMS_Mentioning_Pending','1107161234446402174');
define('SCISMS_eVerify_document','1107161234426578366');
define('SCISMS_Login_Password_To_Email','1107161234420988667');
define('SCISMS_Payment_Cancelled','1107161234413363263');
define('SCISMS_Payment_failed','1107161234408325166');
define('SCISMS_Payment_pending','1107161234399292942');
define('SCISMS_Payment_Success','1107161234393137847');
define('SCISMS_Efiling_Disapproved','1107161234386293489');
define('SCISMS_Efiling_Approved','1107161234375415118');
define('SCISMS_Citation_notes','1107161234368984184');
define('SCISMS_Initial_Approval','1107161234352323994');
define('SCISMS_Change_Password_OTP','1107161234345817127');
define('SCISMS_Case_Submission_OTP','1107161234339300790');
define('SCISMS_Efiling_OTP_Via_Assistant','1107161234331242512');
define('SCISMS_efiling_OTP','1107161234323414828');
define('SCISMS_Registration_OTP','1107161234316346524');
define('SCISMS_On_Rectification','1107161234308526138');
define('SCISMS_On_Rejection','1107161234300351414');
define('SCISMS_On_Approval','1107161234295200583');
define('SCISMS_Final_Submit','1107161234289625322');
define('SCISMS_OTP_DSCR_Password','1107161234283738736');
define('SCISMS_Login_OTP','1107161234276407807');
define('SCISMS_Consignment_dispatch','1107161234270560829'); //ok
define('SCISMS_Video_Conference_link','1107161234264170741');//ok - variable length to increased
define('SCISMS_Not_filed_ecopy','1107161234255110851');//ok
define('SCISMS_case_deleted _sms','1107161234243940469');//ok - variable length to increased
define('SCISMS_Listing_sms','1107161234236531260');//ok - variable length to increased
define('SCISMS_Party_verification_rejected','1107161234229761818');//ok
define('SCISMS_Party_verification_completed','1107161234213568779');//ok
define('SCISMS_DIGITAL_COPY_NEW_CRN','1107161234205433875');//ok
define('SCISMS_list_publish','1107161216137616783');//ok - variable length to increased
define('SCISMS_weekly_L_Pub','1107161216129865584');//ok - template to be revised
define('SCISMS_allocation_otp','1107161216121714002');//ok
define('SCISMS_e_copying_login','1107161216116431456');//ok
define('SCISMS_e_copying_loging','1107161216107953212');//ok - for authenticated by aor
define('SCISMS_e_copying_crn_created','1107161216101237396');//ok
define('SCISMS_eCopying_charges','1107161216091023087');
define('SCISMS_e_copying_appli','1107161216076262823'); //ok
define('SCISMS_e_copying_g_p','1107161216067222779');//ok
define('SCISMS_e_copying_crn','1107161216056845349');//ok
define('SCISMS_NodePulse_SCI','1107161216042285641');
define('SCISMS_causelist_cur_publish','1107161216018945785');
define('SCISMS_causelist_published','1107161215982096473');
define('SCISMS_SCIAPP_OTP','1107161215956433148');
define('SCISMS_OTP_TEMPLATE','1107161207285701229');
define('SCISMS_VC_URL','1107161578953314817');//ok

//update 26-07-2022
define('SCISMS_CHECK_EMAIL_FOR_CRN','1107161578937563092');
define('SCISMS_eCopying_verification_complated','1107161578943708782');
define('SCISMS_eCopying_verification_complated_rejected','1107161578948701261');
define('SCISMS_ECOPYING_APPEARING_COUNSEL_LINK','1107165873475329990');//Required to validate

//new 23-07-2022
define('SCISMS_VC_URL_NEW','1107165847988767784'); //VC_LINK_TEMPLATE
define('SCISMS_DIGITAL_COPY_NEW_CRN_NEW','1107165846621046144'); //crn for digital copy

//DISABLED ON 13092023
//define('SCISMS_CASE_DELETED_DROPPED','1107165846598852322');//SCI_CASE_DELETED_DROPPED
//define('SCISMS_CASE_LISTED_NEW','1107165846562023756');

//UPDATED ON 13092023
define('SCISMS_CASE_DELETED_DROPPED','1107166305099773071');//SCI_CASE_DELETED_DROPPED
define('SCISMS_CASE_LISTED_NEW','1107166305078978146');





define('SCISMS_CAUSE_LIST_PUBLISH_NEW','999999999999999999999999');
define('SCISMS_LISTED_FOR_HYBRID','999999999999999999999999');

define('WEB_ROOT', '/supreme_court/');
//define('SRV_ROOT', $srvRoot);
define('Username', 'Username');
define('Password', 'Password');
define('Json_master_table', 'Json_master_table/');
