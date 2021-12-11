<?php
	session_start();

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '1299918467117843',
		'app_secret' => 'ad0a98d0da23e7e301d5908c31219112',
		'default_graph_version' => 'v12.0'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>