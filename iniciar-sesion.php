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
      <title>Iniciar Sesión</title>
    <link href="css/estilos2.css" rel="stylesheet" type="text/css">
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
   </head>
    
<body>
    <div class="menu">
                    <div class="container logo-nav-container">
                        <a  class="letras" href="principal.php">
                            <span class="gaceta">Gaceta Digital</span>
                        </a>
                        <ul class="der">
                            <li class="mas">
                                <a class="noticias" href="todas.php" title="M&aacute;s noticias">M&aacute;s noticias</a>
                            </li>
                            <li class="regi">
                                <a class="regis" href="registro.php" title="Registrate">Registrate</a>
                            </li>
                        </ul>
                    </div>
    </div>
      
    <div id="formulario-registro">  
        
        <form action="login.php" method="post">
          <p class=titulo-form>"Iniciar Sesi&oacute;n"</p> 
  
   
             <p id="mail">Correo electr&oacute;nico/No Boleta:
                <input type="text" REQUIRED id="correo" name="NoBoleta" size="31"  >
            </p>
    
 
    
            <p class="contrasena">Contrase&ntilde;a:
                <input type="password" REQUIRED id="contrasena" name="contrasena" size="48"  >
            </p>

            <input class="btn-aceptar" type="submit" name="ingresar" value="Aceptar" />
            <p class=No-cuenta>"¿No tienes Cuenta?"</p>
            
            
            <div class="btn-c">
                 <a href="registro.php" class="btn"> 
                     <span>Crear una cuenta</span></a> 
            </div>
            
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