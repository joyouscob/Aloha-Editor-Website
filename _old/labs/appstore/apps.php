<?php

require_once('fb.php');

	$fb = Array(
		"appId" => $facebook->getAppId(),
		"session" => json_encode($session),
		"status" => true
	);
	if ( $me ) {
		$fb['logoutUrl'] = $facebook->getLogoutUrl();
	} else {
		$fb['loginUrl'] = $facebook->getLoginUrl();
	}

	$plugins = Array();
	$p_root = "http://aloha-editor.org/labs/appstore/aloha-0.9.3/plugins";
	if ( $me ) {
		$plugins[] = Array (
			"url" => $p_root."/com.gentics.aloha.plugins.Format/plugin.js",
			"version" => "0.9.3"
		);
		$plugins[] = Array (
			"url" => $p_root."/com.gentics.aloha.plugins.Table/plugin.js",
			"version" => "0.9.3"
		);
		$plugins[] = Array (
			"url" => $p_root."/com.gentics.aloha.plugins.Link/plugin.js",
			"version" => "0.9.3"
		);
	}

	$res = Array(
		"fb" => $fb,
		"plugins" => $plugins
	);
	header('Content-Type: text/javascript');
	echo 'Apps.config = '.json_encode($res).';Apps.asyncInit();';
?>
