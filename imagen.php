<?php
	
	$host_db = "localhost";
 	$user_db = "root";
 	$pass_db = "";
 	$db_name = "basegacetadigital";
 	$tbl_name = "post";
 
 	$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 	if ($conexion->connect_error) {
 	die("La conexion falló: " . $conexion->connect_error);
	}

	$escuela = $_REQUEST["institucion"];
	$titulo = $_REQUEST["title"];
	$URL = $_REQUEST["url"];
	$imagenes = $_FILES["img"]["name"]; 
	$TEXTO = $_REQUEST["texto"];
	$ruta=$_FILES["img"]["tmp_name"];
	$destino="imagenes/".$imagenes;
	copy($ruta, $destino);
	$query = "INSERT INTO post (title,image,Contenido,institucion,URL) 
						VALUES ('$titulo','$destino','$TEXTO','$escuela','$URL')";
	if ($conexion->query($query) === TRUE) {
 	echo '<center><h1>¡NOTICIA AGREGADA!</h1></center>';
                echo '<meta http-equiv="refresh" content="1; url=principal.php" />';
 }




?>