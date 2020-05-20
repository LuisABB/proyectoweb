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
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Gaceta Digital</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link href="css/estilos2.css" rel="stylesheet" type="text/css">
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
        <div class=titulo>Gaceta Digital</div>
        <div class="todo">
                <div class="news">
                    <?php
                        $host_db = "localhost";
                        $user_db = "root";
                        $pass_db = "";
                        $db_name = "basegacetadigital";
                        $tbl_name = "post";
         
                        $conn = mysqli_connect($host_db, $user_db, $pass_db, $db_name);
                        $result = mysqli_query($conn,'SELECT id_post, title, image, Contenido, URL FROM post ORDER BY id_post DESC 
                        LIMIT 3') or die('Invalid query: ' . mysql_error());

                        //imprimir valores a la pantalla
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<a href="'.$row["URL"].'"> <img class="uno" src="'.$row["image"].'"  alt="'.$row["id_post"].'"></a>';
                            echo '<h2>'.$row["title"].'</h2>';
                            echo '<p>'.$row["Contenido"].'</p>';
                        }

                        // Libera los recursos asociados con el conjunto de resultados
                        // Esto se hace automáticamente al final del script
                        mysqli_free_result($result);
                    ?>
                </div>
                <div class="escuelas">
                    <table>
                        <tr>
                            <th>
                                <a href="escom.php">
                                <img class="dos" src="imagenes/escom.png" alt="logo escom">
                                </a>
                            </th>
                            <th>
                                <a href="esime.php">
                                <img class="dos" src="imagenes/esime.png" alt="logo esime">
                                </a>
                            </th>
                            <th>
                                <a href="esia.php">
                                <img class="dos" src="imagenes/esia.png" alt="logo esia">
                                </a>
                            </th>
                            <th>
                                <a href="cics.php">
                                <img class="dos" src="imagenes/cics.png" alt="logo cics">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <a href="esca.php">
                                <img class="dos" src="imagenes/esca.png" alt="logo esca">
                                </a>
                            </td>
                            <td>
                                <a href="encb.php">
                                <img class="dos" src="imagenes/encb.png" alt="logo encb">
                                </a>
                            </td>
                            <td>
                                <a href="enmh.php">
                                <img class="dos" src="imagenes/enmh.png" alt="logo enmh">
                                </a>
                            </td>
                            <td>
                                <a href="eseo.php">
                                <img class="dos" src="imagenes/eseo.png" alt="logo eseo">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <a href="esm.php">
                                <img class="dos" src="imagenes/esm.png" alt="logo esm">
                                </a>
                            </th>
                            <th>
                                <a href="ese.php">
                                <img class="dos" src="imagenes/ese.png" alt="logo ese">
                                </a>
                            </th>
                            <th>
                                <a href="est.php">
                                <img class="dos" src="imagenes/est.png" alt="logo est">
                                </a>
                            </th>
                            <th>
                                <a href="upibi.php">
                                <img class="dos" src="imagenes/upibi.png" alt="logo upibi">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="upiicsa.php">
                                <img class="dos" src="imagenes/upiicsa.png" alt="logo upiicsa">
                                </a>
                            </th>
                            <th>
                                <a href="upiita.php">
                                <img class="dos" src="imagenes/upiita.png" alt="logo upiita">
                                </a>
                            </th>
                            <th>
                                <a href="esfm.php">
                                <img class="dos" src="imagenes/esfm.png" alt="logo esfm">
                                </a>
                            </th>
                            <th>
                                <a href="esiqie.php">
                                <img class="dos" src="imagenes/esiqie.png" alt="logo esiqie">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <a href="esit.php">
                                <img class="dos" src="imagenes/esit.png" alt="logo esit">
                                </a>
                            </th>
                            <th>
                                <a href="upiig.php">
                                <img class="dos" src="imagenes/upiig.png" alt="logo upiig">
                                </a>
                            </th>
                            <th>
                                <a href="upiiz.php">
                                <img class="dos" src="imagenes/upiiz.png" alt="logo upiiz">
                                </a>
                            </th>
                            <th>
                                <a href="enba.php">
                                <img class="dos" src="imagenes/enba.png" alt="logo enba">
                                </a>
                            </th>
                        </tr>
                    </table>
                </div>
        </div>
    <div class="comm">
        <center><h2>Contamos con una secci&oacute;n de comentarios por si deseas agregar una opini&oacute;n acerca de la p&aacute;gina</h2></center>
        <br>
        <center><a class="boton_personalizado" href="comentarios.php">Comentar</a></center>
        
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
