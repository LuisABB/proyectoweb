<?php
 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "basegacetadigital";

 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 if(!$conn)
 {
 	die("No hay conexion: ".mysqli_connect_error());
 }

 $nombre = $_POST["NoBoleta"];
 $pass = $_POST["contrasena"];

 $query = mysqli_query($conn, "SELECT * FROM usuario WHERE No_Boleta = '".$nombre."' and Contrasena = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location: principal.html");
	//echo "Bienvenido:" .$nombre;
}
else if($nr == 0)
{
	header("Location: iniciar-sesion-falla.html");
}

?>
