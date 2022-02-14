<?php
class Database {
	//mysql://ba2b2d8529b7c0:4a599f17@eu-cdbr-west-02.cleardb.net/heroku_d07ee3d0e5d89eb?reconnect=true
	public static $db;
	public static $con;
	function Database(){
		$this->user="ba2b2d8529b7c0";$this->pass="4a599f17";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_d07ee3d0e5d89eb";
		//Copiar también la información de la conexión en la función de abajo connect()
	}

	function connect(){
		//Copiar aquí también la info de la conexión
		$this->user="ba2b2d8529b7c0";$this->pass="4a599f17";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_d07ee3d0e5d89eb";
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
