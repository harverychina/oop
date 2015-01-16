<?php
class conn{
	public $host = 'localhost';
	public $user = 'root';
	public $pass = '';
	public $charset = 'SET NAMES UTF8';
	public $database = 'book';

	function connection (){
		$link  = mysql_connect($host,$user,$pass) or exit('Database is error!').mysql_error();
		mysql_query($charset);
		mysql_select_db($database);
		return $link;
	}
}
?>