<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

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
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
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
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

// Instamojo payment gateway credentials
define('INSTAMOO_CLIENT_ID', 'test_JXL7CHJCTfyKrzXXhltilTbOR69gBRiavuP');
define('INSTAMOO_SECRET_KEY', 'test_SBCbOj6cVrH1A4mXQGLTLBmAZYFtBwCnxn1wBDoB6t1J7J9HKhduRt6VhXe0tUhHazu9RGRmJeU9dFLbIa0BP2LfR43es8syExGQSqtMaNA1y8ciCQBk32mR0xd');
define('INSTAMOJO_USERNAME', 'sathishds94');
define('INSTAMOJO_PASSWORD', '31051993@ds');



define('BANNER_IMAGE_PATH', 'uploads/banners/');

if (!file_exists('uploads/banners/')) {
    mkdir('uploads/banners/', 0777, true);
}

define('SETTINGS_UPLOAD_PATH', 'uploads/settings/');


define('GALLERY_UPLOAD_PATH', 'uploads/gallery/');
if (!file_exists('uploads/gallery/')) {
    mkdir('uploads/gallery/', 0777, true);
}
define('GALLERY_IMG_UPLOAD_PATH', 'uploads/gallery/profile_img/');
if (!file_exists('uploads/gallery/profile_img/')) {
    mkdir('uploads/gallery/profile_img/', 0777, true);
}

define('GALLERY_VIDEO_UPLOAD_PATH', 'uploads/video_gallery/');
if (!file_exists('uploads/video_gallery/')) {
    mkdir('uploads/video_gallery/', 0777, true);
}

define('BLOG_PHOTO_UPLOAD_PATH', 'uploads/blog/');
if (!file_exists('uploads/blog/')) {
    mkdir('uploads/blog/', 0777, true);
}

define('DONATIONS_PATH', 'uploads/donations/');
if (!file_exists('uploads/donations/')) {
    mkdir('uploads/donations/', 0777, true);
}
define('CHARITABLE_PROGRAM_BANNER_PATH', 'uploads/charitable_program/');
if (!file_exists('uploads/charitable_program/')) {
    mkdir('uploads/charitable_program/', 0777, true);
}
define('CAMPAIGN_BANNER_PATH', 'uploads/campaigns/');
if (!file_exists('uploads/campaigns/')) {
    mkdir('uploads/campaigns/', 0777, true);
}
define('CHAPTER_BANNER_PATH', 'uploads/chapters/');
if (!file_exists('uploads/chapters/')) {
    mkdir('uploads/chapters/', 0777, true);
}
define('INVOICE_PDF_PATH', 'uploads/invoice_pdf/');
if (!file_exists('uploads/invoice_pdf/')) {
    mkdir('uploads/invoice_pdf/', 0777, true);
}

define('WIDGET_PHOTO_UPLOAD_PATH', 'uploads/widgets/');
if (!file_exists('uploads/widgets/')) {
    mkdir('uploads/widgets/', 0777, true);
}


define('PERSONAL_PHOTO_PATH', 'uploads/personal_photo/');
if (!file_exists('uploads/personal_photo/')) {
    mkdir('uploads/personal_photo/', 0777, true);
}
define('CUSTOMER_DOCUMENTS_PATH', 'uploads/customer_documents/');
if (!file_exists('uploads/customer_documents/')) {
    mkdir('uploads/customer_documents/', 0777, true);
}
define('RESUME_PATH', 'uploads/resume/');
if (!file_exists('uploads/resume/')) {
    mkdir('uploads/resume/', 0777, true);
}
define('PROJECT_PICTURE_PATH', 'uploads/project/');
if (!file_exists('uploads/project/')) {
    mkdir('uploads/project/', 0777, true);
}
