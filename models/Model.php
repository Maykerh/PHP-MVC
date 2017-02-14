<?php

class Model{

	protected $conn;
	
	public function __construct(){

		global $config;

		$this->conn = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpassword']);
	}
}