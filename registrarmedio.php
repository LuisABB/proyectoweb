<?php

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "";
 $db_name = "basegacetadigital";
 $tbl_name = "medios";
 
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $buscarUsuario = "SELECT * FROM $tbl_name WHERE No_Boleta = '$_POST[NoBoleta]' ";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
 echo "<br />". "La boleta ya se ha registrado." . "<br />";
 }
 else{
 
 //$hash = password_hash($form_pass, PASSWORD_BCRYPT); ENCRIPTAR CONTRASENA

 $query = "INSERT INTO usuario (No_Boleta,Nombre_Usuario,Correo,Contrasena,Apellido)
           VALUES ('$_POST[NoBoleta]', '$_POST[usuario_nombre]', '$_POST[user_mail]', '$_POST[contrasena]', '$_POST[usuario_apellido]')";

 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='principal.html'>Login</a>" . "</h5>"; 
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>