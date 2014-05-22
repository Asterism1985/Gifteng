<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//define('SERVER_URL',                'http://veneficalabs.com:8080/venefica'); //dev server
//define('SERVER_URL',                'http://veneficalabs.com:8080/gifteng'); //live server (old)
//define('SERVER_URL',                'http://gifteng-ws.jelastic.servint.net/gifteng'); //another live server
define('SERVER_URL',                'http://localhost:8080/venefica'); //local server
//define('SERVER_URL',                'http://gifteng.elasticbeanstalk.com'); //another live server

//define('IMAGE_SERVER_URL',          SERVER_URL); //live server
//define('IMAGE_SERVER_URL',          'http://veneficalabs.com:8080/venefica'); //dev server
//define('IMAGE_SERVER_URL',          'http://localhost:8080/venefica'); //local server

//define('APP_URL',   'http://gifteng.com/'); //live server
//define('APP_URL',   'http://veneficalabs.com/gifteng/'); //dev server
//define('APP_URL',   'http://localhost/venefica-site/'); //local server

//define('AMAZON_URL',    'https://s3.amazonaws.com/gifteng/'); //live server
define('AMAZON_URL',    'https://s3.amazonaws.com/ge-dev/'); //dev server

define('AUTH_SERVICE_WSDL',         SERVER_URL.'/services/AuthService?wsdl');
define('AD_SERVICE_WSDL',           SERVER_URL.'/services/AdService?wsdl');
define('INVITATION_SERVICE_WSDL',   SERVER_URL.'/services/InvitationService?wsdl');
define('MESSAGE_SERVICE_WSDL',      SERVER_URL.'/services/MessageService?wsdl');
define('USER_SERVICE_WSDL',         SERVER_URL.'/services/UserManagementService?wsdl');
define('UTILITY_SERVICE_WSDL',      SERVER_URL.'/services/UtilityService?wsdl');
define('ADMIN_SERVICE_WSDL',        SERVER_URL.'/services/AdminService?wsdl');

define('CONNECT_TO_FACEBOOK_URL',   SERVER_URL.'/connect/facebook?scope=email,publish_stream,user_status&display=popup');
define('SIGN_IN_FACEBOOK_URL',      SERVER_URL.'/signin/facebook?scope=email,publish_stream,user_status&display=popup');
define('CONNECT_TO_TWITTER_URL',    SERVER_URL.'/connect/twitter?display=popup');
define('SIGN_IN_TWITTER_URL',       SERVER_URL.'/signin/twitter?display=popup');

define('DEBUG', 'debug');
define('INFO',  'info');
define('ERROR', 'error');

define('AJAX_STATUS_RESULT', 'result');
define('AJAX_STATUS_ERROR', 'error');

define('AD_GIVING_HTML', 'ad_giving_html');
define('AD_RECEIVING_HTML', 'ad_receiving_html');
define('AD_BOOKMARKS_NUM', 'ad_bookmarks_num');
define('USER_BOOKMARKS_NUM', 'user_bookmarks_num');
define('USER_GIVINGS_NUM', 'user_givings_num');
define('USER_RECEIVINGS_NUM', 'user_receivings_num');
define('USER_FOLLOWINGS_NUM', 'user_followings_num');
define('USER_FOLLOWERS_NUM', 'user_followers_num');

//define('DATE_FORMAT', 'd-m-Y'); //dd-mm-yyyy
define('MAX_ALLOWED_REQUESTS', 3);
define('DESCRIPTION_MAX_LENGTH', 750);
define('COMMENT_MAX_LENGTH', 100); ////the number of chars for a comment before truncate
define('COMMENT_MAX_SIZE', 255); //the maximum length of a comment when editing
define('MESSAGE_MAX_LENGTH', 100); //the number of chars for a message before truncate
define('MESSAGE_MAX_SIZE', 2000); //the maximum length of a message when editing
define('PASSWORD_MIN_SIZE', 6);
define('UPLOAD_FILE_MAX_SIZE', 5 * 1024 * 1024); //in bytes
define('UPLOAD_IMAGE_MIN_WIDTH', 400); //in pixels
define('UPLOAD_IMAGE_MIN_HEIGHT', 400); //in pixels
define('UPLOAD_FILE_PREFIX', 'venefica_'); //dev server
//define('UPLOAD_FILE_PREFIX', 'gifteng_'); //live server
define('TEMPLATES', 4);
define('TEMP_FOLDER', sys_get_temp_dir());


/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */