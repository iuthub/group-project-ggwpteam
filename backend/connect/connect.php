<?php 
define('HOST', '127.0.0.1');
define('LOGIN', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'dbGGWPTEAM');
define('SITE_NAME', 'BracketShop');

$connect=mysqli_connect(HOST,LOGIN,PASSWORD,DATABASE);
	if (!$connect){
		echo "Ошибка соединения с БД <br>";
		echo "Код ошибки: ".mysqli_connect_errno()."<br>";
		echo "Текст ошибки: ".mysqli_connect_error();
	exit;
	}
	session_start();
 ?>