<?php

require_once('config.php');			// Load all Configuration Parameters
require_once('functions.php');		// Load all needed base Functions

if(isset($_GET['logout']))
	require_once(ABSCPATH.'modules/citizens/logout.php');	//Logout User

user_session_manager();				// Start the Session Manager

if (!user_is_logged_in()) {			// Check if User is Logged In
	if(!isset($_GET['login']) && !isset($_GET['oauth_token']))
		require_once('modules/citizens/login.php');	//If not Logged In show Login Screen
	else
		require_once('modules/citizens/oauth.php');	//If trying to Login, start the Oauth Procedure
}else{

	session_start();

	initiate();						// Initiate all Needed Variables/Methods
	debug();
	
	if(isset($_GET['p']))
		load_page(trim($_GET['p']));	// If set Load Page..
	else
		load_home();					// else Load Home
}

?>