<?php
	
	/*
		Rename file to auth.php
	*/

	/*
		This file is for defining a common username and password used by a bunch of servers in the servers array
		If the server is to use the authentication details in this file, then it should not be included in the 'username' and 'password' keys in the servers array
	**/
	return [

		'common_username'		=>		'username',
		'common_password'		=>		'password'

	];

?>