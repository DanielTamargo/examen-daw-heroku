<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b61c5915ab24eb";$this->pass="9cc656bd";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_a01bc4777651db0";
		//Copiar también la información de la conexión en la función de abajo connect()
	}

	function connect(){
		//Copiar aquí también la info de la conexión
		$this->user="b61c5915ab24eb";$this->pass="9cc656bd";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_a01bc4777651db0";
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
