#!/usr/bin/env php

<?php
	
// use \App\Classes\SSHManager as SSHManager;
require 'classes/SSHManager.php';
$servers = require 'config/servers.php';
$auth = require 'config/auth.php';

if(isset($argv[1])) {
	$arg = $argv[1];
} else {
	echo "Argument needed. add with --command=\"[command]\"\n\n";
	die();
}

if( strpos($arg, '--command=') === false ) {
	echo "Argument format invalid. use --command=\"[command]\"\n\n";
	die();
}

$command = str_replace("\"","",str_replace("--command=", "", $arg));

foreach($servers as $server) {

	$host = $server['host'];

	if(isset($server['username']) && isset($server['password'])) {
		$username = $server['username'];
		$password = $server['password'];
	} else {
		$username = $auth['common_username'];
		$password = $auth['common_password'];
	}



	echo "executing on server " . $host . "...\n";
	$sshMan = new SSHManager($host,$username,$password);
	$res = $sshMan -> execCommand($command);
	echo $res;
	echo "\n";
}

?>