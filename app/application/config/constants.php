<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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

/*
|--------------------------------------------------------------------------
| Custome define constant
|--------------------------------------------------------------------------
*/

/*
|-----------------------------------------
| Custome define file and folder language
|-----------------------------------------
*/
define('FOLDER_LANG', 'lang');
define('FILE_EN', 'en');

/*
|-----------------------------------------
| Custome define array lang
|-----------------------------------------
*/
define('LANG_EN', 'English');
define('LANG_CN', 'Chinese');
define('LANG_TITE_SUPER_LOGIN', 'SUPPER ADMIN LOGIN');
define('LANG_USER',	'User');
define('LANG_PASS',	'Password');
define('LANG_LOGIN', 'Login');
define('LANG_CHOOSE_LANG', 'choose_lang');

define('LANG_LOGOUT', 'logout');

define('LANG_HORSE_RACING','horse_racing');
define('LANG_TRANS_HISTORY', 'trans_history');
define('LANG_ADD_AGENT', 'add_agent');
define('LANG_ADD_USER', 'add_user');
define('LANG_SHOW_ALL',	'show_all');
define('LANG_REPORT','Report');
define('LANG_GEN_STATEMENT', 'gen_statement');



/*
|--------------------------------------------------------------------------
| Custome define constant
|--------------------------------------------------------------------------
*/
/* End of file constants.php */
/* Location: ./application/config/constants.php */