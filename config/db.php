<?php

/**
* obsoleto
*/ 
require_once "config.php";

class db{
	private $db;
	private $conn;
	private static $singleton;

	private function __construct(){
		$this->conn = new mysqli(HOST,USER,PASS,DB_NAME);
		if($this->conn->connect_errno){
			echo "Fallo la conexión al MySQL: (" . $this->conn->connect_errno . ") " . $this->conn->connect_error;
		}
	}

	public static function getInstance(){
		if(is_null(self::$singleton)){
			self::$singleton = new db();
		}
		return self::$singleton;
	}

	public function query($sql=null){
		if($sql != null):
			$query = $this->conn->query($sql);
			if($query->num_rows > 0):
				return $query;
			else:
				return array();
			endif;
		endif;
	}

	public function get($table){
		$query = $this->conn->query("SELECT * FROM ".$table);
		if($query->num_rows > 0){
			return $query;
		}else{
			return array();
		}
	}
}
?>