<?php
session_start();
    include "config.php";
    include "funciones.php";
    //en caso de error
    ini_set('error_reporting', 0);

if($_POST['register_btn']){
        $usuario =  $_POST['NoBoleta'];
        $contrasena = $_POST['contrasena'];
        $type = "alumnos";

        $c = mysqli_num_rows(mysqli_query($connect,"SELECT * FROM usuario WHERE No_Boleta = '$usuario'"));
        if($c == 1){
            echo '<center><h1>El alumno ya esta registrado</h1></center>';
            echo '<meta http-equiv="refresh" content="1; url=usuario-regis.php" />';
        }else{
            $r = mysqli_query($connect,"INSERT INTO usuario (No_Boleta, Nombre_Usuario, Correo, Contrasena, Apellido, Tipo) values ('$usuario','$_POST[usuario_nombre]','$_POST[user_mail]','$contrasena','$_POST[usuario_apellido]','$type')");
            if ($r){
            	//echo "El alumno $usuario se ha registrado con exito";
            	echo '<center><h1>El usuario '.$usuario.' se registro correctamente</h1></center>';
            	echo '<meta http-equiv="refresh" content="1; url=iniciar-sesion.php" />'; 
            }
        }
    }
 
?>