<?php

define('ABSPATH', 	'../in/');						// This base path of the main applciation.
define('ABSCPATH', 	dirname(__FILE__) . '/');		// This base path of the public applciation.
define('DEBUG', 	true);							// Debug Capability
error_reporting(E_ALL^E_WARNING^E_NOTICE^E_STRICT);

// ------ Global Static Variables --------------//

define('DB_HOST', 		'');		// The Database host
define('DB_NAME', 		'');		// The Database name
define('DB_USER', 		'');		// The Database user
define('DB_PASS', 		'');		// The Database password

define('URL',			'0');		// The main URL of the site

define('WSO2', 			'');		// The WSO2 Server URL
define('WSO2WEB',		'');		// The WSO2 Web Services Server UR

define('SMTP_HOST', 	'');		// SMTP Host 
define('SMTP_EMAIL', 	'');		// SMTP eMail 
define('SMTP_USER', 	'');		// SMTP Username
define('SMTP_PASS', 	'');		// SMTP Password

// ------ Global Variables ----------------------//

global 	$user_auth,						// Session Management
		$db,							// Database Connection
		$application_list,				// Application List of the User
		$css_files,						// CSS Files to be Loaded
		$js_files,						// JS Files to be Loaded
		$app_title,						// Environment Title
		$user_menu,						// Top Right Menu
		$side_menu,						// Sidebar Menu
		$message_list;					// Messages Produced
?>