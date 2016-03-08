<?php

	function user_session_manager(){	
		global $user_auth, $access_token, $access_token_secret;
		
		if(isset($_COOKIE['access_token']) and $_COOKIE['access_token'] != ''){ // We have done it before
			$access_token = $_COOKIE['access_token'];
			$access_token_secret = $_COOKIE['access_token_secret'];
		} else {
			$access_token = '';
			$access_token_secret = '';
		}
	}
	
	
	/* 	-------------------------------------------------------------------------------------
	*	Check if there is an Active Session	
	*  -------------------------------------------------------------------------------------*/
	function user_is_logged_in(){						
		global $user_auth, $access_token, $access_token_secret;
		
		if($access_token != '' and !empty($access_token))
			return true;
			
		return false;
	}
	
	/* 	-------------------------------------------------------------------------------------
	*	Get the User LogIn URL
	*  -------------------------------------------------------------------------------------*/
	function user_get_login_url($class = array('')){	
		
		return '<a href="' . URL . '/?login" class="'.implode(' ', $class).'">Σύνδεση</a>';
	}
	
	/* 	-------------------------------------------------------------------------------------
	*	Get the User LogOut URL
	*  -------------------------------------------------------------------------------------*/
	function user_get_logout_url($class = array('')){	

		return '<a href="' . URL . '/?logout"><i class="'.implode(' ', $class).'"></i> Αποσύνδεση</a>';
	}
	
	/* 	-------------------------------------------------------------------------------------
	*	Get the User Display Name based on the Session by the LDAP
	*  -------------------------------------------------------------------------------------*/
	function user_get_display(){
		global $user;
		echo $user['gsis_user_id']['firstName'].' '.$user['gsis_user_id']['surname'];
	}
	
	/* 	-------------------------------------------------------------------------------------
	*	Get the User Details from the Database
	*  -------------------------------------------------------------------------------------*/
	function get_user_details(){
		global $user;
		$user = array(
			'gsis_user' 	=> $_SESSION['gsis_user'], 
			'gsis_user_id' 	=> $_SESSION['gsis_user_id']
		);
		
	}

	
?>