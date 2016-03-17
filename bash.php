#!/usr/bin/env php

<?php
	
// use \App\Classes\SSHManager as SSHManager;
require 'classes/SSHManager.php';
$servers = require 'config/servers.php';
$auth = require 'config/auth.php';

if(isset($argv[1])) {
	$arg = $argv[1];
} else {
	$arg = null;
}



foreach($servers as $server) {

	$host = $server['host'];
	$username = $server['user'];
	$password = $server['password'];

	echo "executing on server " . $host . "...\n";
	$sshMan = new SSHManager($host,$username,$password);
	$res = $sshMan -> execCommand("cd software && git pull origin master");
	echo $res;
	echo "\n";
}

?>