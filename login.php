<?php
session_start();
include "config.php";
include "funciones.php";
//en caso de error

if (isset($_SESSION['usuario'])){
	header("Location: principal.php");
}

ini_set('error_reporting', 0);

if($_POST['ingresar']){
    $usuario = $_POST["NoBoleta"];
    $contrasena = $_POST["contrasena"];
     if(ctype_digit($usuario)){
            $query = mysqli_query($connect,"SELECT * FROM usuario WHERE No_Boleta = '$usuario' and Contrasena = '$contrasena'");
            $contar = mysqli_num_rows($query);

            if($contar != 0){
                while ($row=mysqli_fetch_array($query)){
                    if($usuario == $row['No_Boleta'] && $contrasena == $row['Contrasena']){
                        $_SESSION['usuario'] = $row['Nombre_Usuario'];
                        $_SESSION['user'] = $row['Tipo'];
                        $_SESSION['id'] = $row['No_Boleta'];
                        header("Location: principal.php");

                    }
                }
            }else{
                echo '<center><h1>El nombre de usuario y/o contraseña no coinciden</h1></center>';
                echo '<meta http-equiv="refresh" content="1; url=iniciar-sesion.php" />';
            }
    }else{
        $query = mysqli_query($connect,"SELECT * FROM medios WHERE Correo = '$usuario' and Contrasena = '$contrasena'");
            $contar = mysqli_num_rows($query);

            if($contar != 0){

                while ($row=mysqli_fetch_array($query)){
                    if($usuario == $row['Correo'] && $contrasena == $row['Contrasena']){
                        $_SESSION['usuario'] = $row['Nombre_Autor'];
                        $_SESSION['user'] = $row['Tipo'];
                        header("Location: mediosdecomunicacion.php");

                    }
                }
            }else{
                echo '<center><h1>El nombre de usuario y/o contraseña no coinciden</h1></center>';
                echo '<meta http-equiv="refresh" content="1; url=iniciar-sesion.php" />';
            }
    }
}

?>
