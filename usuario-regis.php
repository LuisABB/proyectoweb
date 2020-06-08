<?php
session_start();
include "config.php";
include "funciones.php";
//en caso de error
if (isset($_SESSION['usuario'])){
   header("Location: principal.php");

}

ini_set('error reporting', 0);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title>Registro</title>
    <link href="css/estilos2.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    
   </head>
    
<body>
      <div class="menu">
                    <div class="container logo-nav-container">
                        <a  class="letras" href="principal.php">
                            <span class="gaceta">Gaceta Digital</span>
                        </a>
                        <ul class="der">
                            <li class="mas">
                                <a class="noticias" href="todas.php" title="M&aacute;s noticias">M&aacute;s noticias </a>
                            </li>
                            <li class="regi">
                                <a class="regis" href="iniciar-sesion.php" title="Registrate">Iniciar Sesi&oacute;n</a>
                            </li>
                        </ul>
                    </div>
        </div>



    <div id="formulario-registro">  
        
        <form action="registrar.php" method="post">
          <p class=titulo-form>"Usuario"</p> 
  
            <p id="Nombre">Nombre:
                <input type="text" REQUIRED id="Nombre-usuario" name="usuario_nombre"  size="51" pattern="[a-zA-Z]*" minlength="4" maxlength="15">
            </p>
    
    
            <p id="Apellido">Apellido:
                <input type="text" REQUIRED id="Apellido-usario" name="usuario_apellido"  size="51" pattern="[a-zA-Z]*" minlength="4" maxlength="15">
            </p>
    
   
            <p id="NoBoleta">No.Boleta: 
                <input type="text" REQUIRED id="No-Boleta" name="NoBoleta" size="49" pattern="[0-9]*" minlength="10" maxlength="10"> 
            </p>
    
 
            <p id="mail">Correo electrónico:
                <input type="text" REQUIRED id="mail-usuario" name="user_mail" size="40" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
            </p>
    
            <p id="contrasena">Contraseña:
                <input type="password" REQUIRED id="contrasena-usuario" name="contrasena" size="48" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){10,20}$" minlength="10" maxlength="20">
            </p>
    
            <input class="btn-aceptar" REQUIRED type="submit" value="Aceptar" name="register_btn" />

        </form>
    </div>

    
     <div class="foot-iniciarsesion">
                <div class="i">
                    <h3>Sitios relacionados</h3>
                    <a href="http://www.infomexdf.org.mx/InfomexDF/default.aspx">infomex</a>
                    <br>
                    <a href="http://www.infodf.org.mx/iaipdf/extra/2011/dp/">Ley de Protecci&oacute;n de Datos Personales de la CDMX </a>
                </div>
                <div class="d">
                    <h3>Contacto</h3>
                    <p>Ciudad de M&eacute;xico, Tlalpan, Miguel Hidalgo, C.P. 12340</p>
                    <p>5545901245</p>
                    <p>gacetadigital@contacto.mx</p>
                </div>
        </div>
</body>

</html>