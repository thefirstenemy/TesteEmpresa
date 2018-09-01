<?php
class Connection {

	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $data = "teste";

	function get_host() {
		return $this->host;
	}
	function set_host() {
		$this->host = $host;
	}
	function get_user() {
		return $this->user;
	}
	function set_user() {
		$this->user = $user;
	}
	function get_pass() {
		return $this->pass;
	}
	function set_pass() {
		$this->pass = $pass;
	}
	function get_data() {
		return $this->data;
	}
	function set_data() {
		$this->data = $data;
	}
	public function conn() {
		$con = false;
		$result = $this->database ();
		if ($result)
			$con = $result;
		return $con;
	}
	protected function database() {
		@ini_set ( "session.hash_function", "sha512" );
		@session_start ();
		$con = new mysqli ( $this->host, $this->user, $this->pass, $this->data );
		return $con;
	}
}
?>
