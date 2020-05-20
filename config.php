<?php
$host = "localhost";
$dbuser = "root";
$dbpwd = "";
$db = "basegacetadigital";

$connect = mysqli_connect($host, $dbuser, $dbpwd);
	if(!$connect){
		echo ("No se conecto la base de datos");
	}else{
		$select = mysqli_select_db($connect, $db);
	}

?>