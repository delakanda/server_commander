<?php

// namespace App\Classes;

class SSHManager {

	private $host;
	private $username;
	private $password;
	private $conn;

	public function __construct($host,$username,$password) {
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
	}

	public function connect()
	{
		$this->conn = ssh2_connect($this->host,22);
		ssh2_auth_password($this -> conn,$this->username, $this->password);
	}

	public function execCommand($command)
	{
		$this->connect();
		$stream = ssh2_exec($this->conn, $command);
		stream_set_blocking($stream,true);
		$stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
		return stream_get_contents($stream);
	}

}
	
?>