<?php

global 	$access_token, $access_token_secret, $gsis_parameters;
		
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $gsis_parameters['logout-url'].$access_token);
$r = curl_exec($ch);
curl_close($ch);

// Invalidate the Session of the User
setcookie('access_token', '', time() - 3600, '/'); 
unset($_COOKIE['access_token']);

setcookie('access_token_secret', '', time() - 3600, '/'); 
unset($_COOKIE['access_token_secret']);

$access_token = '';
$access_token_secret = '';

?>