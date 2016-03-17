<?php

	/*
		Rename file to servers.php
	*/
	
	/*
		This file is used to list an array of servers to run the command on
		array parameters:
		host -> host name or IP address of server : required
		username -> username to use to ssh into the server : optional : if not defined, the username in the auth config file will be used
		username -> password to use to ssh into the server : optional : if not defined, the password in the auth config file will be used
	**/

	return [

		[
			'host' 			=>		'hostname or IP Address',
			'username'		=>		'username', 
			'password'		=>		'password'
		]
	];

?>