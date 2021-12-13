<?php
	session_start();

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '215145093675199',
		'app_secret' => '086c6f41e60050d1c0c16c9051c2dbf2',
		'default_graph_version' => 'v12.0'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>