<?php
	
	define('LEAVES_DEBUG_USER_NAME', 'Fotis Routsis');
	define('LEAVES_DEBUG_USER_EMAIL', 'fotis.routsis@gmail.com');
	
    //Επιλογή php αρχείων για εισαγωγή
	require_once(ABSCPATH.'apps/planodioi/functions.php');
	require_once(ABSCPATH.'apps/planodioi/views.php');
	
	// TODO: Check access level here..
	init_planodioi();
	
	function init_planodioi(){
		planodioi_sidebar();		// Initiate the menus
		prepare_pages();		// Prepare pages (css, javascripts etc)
	}
	
?>