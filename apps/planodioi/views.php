<?php
	
	function planodioi_sidebar(){
		global $application_list ;
		global $user;
		global $side_menu;
		$side_menu = array( //Φόρτωση βασικών επιλγών sidebar
			array('url' => URL.'/?p=planodioi|home', 			'class' => 'fa fa-home fa-fw', 			'text' => 'Αρχική'),
			array('url' => URL.'/?p=planodioi|new', 			'class' => 'fa fa-edit fa-fw', 			'text' => 'Υποβολή Αίτησης'),
		);
	}
	
	function prepare_pages(){
		global $css_files;
		global $js_files;
		global $application_list;
		
		$page = '';
		$params = explode('|', trim($_GET['p'])); //Έλεγχος ορισμάτων URL
		if(array_key_exists($params[0], $application_list)){	
			if(empty($params[1]) or $params[1] == '')
				$page = 'home';
			else{
				$path_temp = explode('&', $params[1]);
				$page = $path_temp[0];
			}
		} 

		$css_files[] = array('path' => 'apps/planodioi/style.css');
		
		switch($page){	
			case 'new':			//Prepare the New Application Page
				$js_files[] =  array('head' => false, 'path' => 'apps/planodioi/js/new_form.js');
				break;
		}
		
	}
?>