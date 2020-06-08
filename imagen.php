<?php
	include "config.php";
    include "funciones.php";

 	if ($connect->connect_error) {
 	die("La conexion falló: " . $connect->connect_error);
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
	if ($connect->query($query) === TRUE) {
 	echo '<center><h1>¡NOTICIA AGREGADA!</h1></center>';
                echo '<meta http-equiv="refresh" content="3; url=principal.php" />';
 }




?>