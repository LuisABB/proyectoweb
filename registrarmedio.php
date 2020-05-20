<?php
session_start();
    include "config.php";
    include "funciones.php";
    //en caso de error
    ini_set('error_reporting', 0);

if($_POST['register_btn']){
        $usuario =  $_POST['user_mail'];
        $contrasena = $_POST['contrasena'];
        $type = "medios";

        $c = mysqli_num_rows(mysqli_query($connect,"SELECT * FROM medios WHERE Correo = '$usuario'"));
        if($c == 1){
            echo '<center><h1>El correo electronico ya esta registrado</h1></center>';
            echo '<meta http-equiv="refresh" content="1; url=medios-regis.php" />';
        }else{
            $r = mysqli_query($connect,"INSERT INTO medios (Nombre_Autor, Contrasena, Correo, Tipo) values ('$_POST[usuario_nombre]','$contrasena','$usuario', '$type')");
            if ($r){
            	//echo "El alumno $usuario se ha registrado con exito";
            	echo '<center><h1>El correo '.$usuario.'se ha registrado correctamente como medio de comunicación</h1></center>';
            	echo '<meta http-equiv="refresh" content="1; url=iniciar-sesion.php" />'; 
            }
        }
    }
 
?>