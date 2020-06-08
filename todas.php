<?php
session_start();
include "config.php";
include "funciones.php";
//en caso de error


ini_set('error reporting', 0);
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="ES">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gaceta Digital</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link rel="stylesheet" type="text/css" href="css/estilos2.css">
    </head>
    
    <body>
        <div class="menu">
                    <div class="container logo-nav-container">
                        <a  class="letras" href="principal.php">
                            <span class="gaceta">Gaceta Digital</span>
                        </a>
                        <ul class="der">
                            <?php 
                                if (isset($_SESSION['usuario'])){
                                    echo '<li class="mas">
                                            <a class="noticias" title="Tu usuario">Bienvenido '.$_SESSION['usuario'].'</a>
                                            </li>';
                                }

                                if ($_SESSION['user'] == "medios"){
                                    echo '<li class="mas">
                                            <a class="noticias" href="mediosdecomunicacion.php" title="Nueva noticia">Agregar noticia</a>
                                            </li>';
                                }
                            ?>

                            <li class="mas">
                                <a class="noticias" href="todas.php" title="M&aacute;s noticias">M&aacute;s noticias </a>
                            </li>
                            <?php 
                                if (!isset($_SESSION['usuario'])){
                                    echo '<li class="mas">
                                            <a class="noticias" href="registro.php" title="Registrate">Registrate</a>
                                        </li>';
                                }else{
                                    echo '<li class="mas">
                                            <a class="noticias" href="logout.php" title="Salir">Salir</a>
                                            </li>';
                                }
                            ?>
                        </ul>
                    </div>
        </div>
        <h1>Noticias</h1>
        <div class="contenido">
            <div class="news">
                <?php
                	//SELECT * FROM post WHERE created_at = "2020-05-16 06:02:36"
                    $connect = mysqli_connect($host, $dbuser, $dbpwd, $db);
                    $fechai = date("Y")."-".date("m")."-"."1";
                    $fechaf = date("Y")."-".date("m")."-"."31";
                    //echo $fechai;
                    //echo $fechaf;
                    $sql = mysqli_query($connect,"SELECT * FROM post WHERE created_at BETWEEN '$fechai' AND '$fechaf'");
                    while($res= mysqli_fetch_array($sql)){
                    
                        echo '<a href="'.$res["URL"].'"> <img class="uno" src="'.$res["image"].'"  alt="'.$res["id_post"].'"></a>';
                    	//echo '<h2>'.$res["created_at"].'</h2>';
                        echo '<h2>'.$res["title"].'</h2>';
                        echo '<p>'.$res["Contenido"].'</p>';
                }
                ?>  
            </div>
        </div>
        <div class="foot">
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
