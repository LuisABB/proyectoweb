<?php
session_start();
include "config.php";
include "funciones.php";
//en caso de error

if ($_SESSION['user'] != "medios"){
    header("Location:iniciar-sesion.php");
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<HTML lang="ES">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Medios de Comunicacion</title>
		<link rel="stylesheet" type="text/css" href="css/estilomedios.css">
	</head>
	<body>
		<div class="menu">
                    <div class="container logo-nav-container">
                        <a  class="letras" href="principal.php">
                            <span class="gaceta">Gaceta Digital</span>
                        </a>
                        <ul class="der">
                        	<li class="mas">
                                <a class="noticias" href="#" title="Nombre">Hola <?php echo $_SESSION['usuario']; ?></a>
                            </li>
                            <li class="mas">
                                <a class="noticias" href="todas.php" title="M&aacute;s noticias">M&aacute;s noticias </a>
                            </li>
                            <li class="mas">
                                <a class="noticias" href="logout.php" title="Salir">Salir</a>
                            </li>
                        </ul>
                    </div>
            </div>
            <h1 class="titulo">GACETA DIGITAL</h1>
		<div class="conteiner2">
			<h2 class="titulo">Agregar Noticia</h2>
				
				  <form class="formularionoticia" action="imagen.php" method="POST" enctype="multipart/form-data">

					    <label for="institucion">INSTITUCIÓN</label> <br>
					    <select id="institucion" name="institucion">
					      <option value="ESCOM">Escuela Superior de Cómputo (ESCOM)</option>
					      <option value="ENCB">Escuela Nacional de Ciencias Biológicas (ENCB)</option>
					      <option value="ENMH">Escuela Nacional de Medicina y Homeopatía (ENMH)</option>
					      <option value="CICS">Centro Interdisciplinario de Ciencias de la Salud (CICS)</option>
					      <option value="ESCA">Escuela Superior de Comercio y Administración (ESCA)</option>
					      <option value="ESE">Escuela Superior de Economía (ESE)</option>
					      <option value="ESEO">Escuela Superior de Enfermería y Obstetricia (ES​EO)</option>
					      <option value="ESFM">Escuela Superior de Física y Matemáticas (ESFM)</option>
					      <option value="ESIME">Escuela Superior de Ingeniería Mecánica y Eléctrica (ESIME)</option>
					      <option value="ESIQIE">Escuela Superior de Ingeniería Química e Industrias Extractivas (ESIQIE)</option>
					      <option value="ESIT">Escuela Superior de Ingeniería Textil (ESIT)</option>
					      <option value="UPIIG">Unidad Profesional Interdisciplinaria de Ingeniería Campus Guanajuato (UPIIG)</option>
					      <option value="UPIIG">Unidad Profesional Interdisciplinaria de Ingeniería Campus Zacatecas (UPIIZ)</option>
					      <option value="ESIA">Escuela Superior de Ingeniería y Arquitectura (ESIA)</option>
					      <option value="ESM">Escuela Superior de Medicina (ESM)</option>
					      <option value="EST">Escuela Superior de Turismo (EST)</option>
					      <option value="UPIBI">Unidad Profesional Interdisciplinaria de Biotecnología (UPIBI)</option>
					      <option value="UPIICSA">Unidad Profesional Interdisciplinaria de Ingeniería y Ciencias Sociales y Administrativas (UPIICSA)</option>
					      <option value="UPIITA">Unidad Profesional Interdisciplinaria en Ingeniería y Tecnologías Avanzadas (UPIITA)</option>
					      <option value="UPIITA">Escuela Nacional de Biblioteconomía y Archivonomía (ENBA)</option>
					    </select>
					    <br>
					    <br>
					    <label for="Title">Titulo</label> <br>
					    <input type="text" id="title" name="title">
					    <br>
					    <br>
					    <label for="url">URL</label> <br>
					    <input type="text" id="url" name="url" >
					  <br>
					  <br>
					   <label for="img">Selecciona Imagen:</label>
  						<input type="file" id="img" name="img" accept="image/*">
					  <br>
					  <br>
					  <textarea cols="50" rows="5" name="texto">Texto introductorio...</textarea>
					  <br>
					  <br>
					    <input class="boton" type="submit" value="Enviar">
 				 </form>
 				
		</div>
	<div class="footer">
		 <div class="i">
                    <h3>Sitios relacionados</h3>
                    <a href="http://www.infomexdf.org.mx/InfomexDF/default.aspx">infomex</a>
                    <br>
                    <a href="http://www.infodf.org.mx/iaipdf/extra/2011/dp/">Ley de Protecci&oacute;n de Datos Personales de la CDMX </a>
                </div>
         <div class="d">
                    <h3>Contacto</h3>
                    <p>Ciudad de M&eacute;xico, Tlalpan, Miguel Hidalgo, C.P. 12340<br>
                    5545901245<br>
                    gacetadigital@contacto.mx</p>
                </div>
	</div>
	</body>
</HTML>
