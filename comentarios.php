<?php
session_start();
    include "config.php";
    include "funciones.php";
    //en caso de error

if ($_SESSION['user'] != "alumnos"){
    header("Location: iniciar-sesion.php");
}

//ini_set('error_reporting', 0);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="ES">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Gaceta Digital</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link rel="stylesheet" type="text/css" href="css/estilocom.css">
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
        <div id="L">
        	<h1>Comentarios</h1>
        	<form name="form1" method="post" action="">
        		<label for="textarea"></label>
        		<center>
        			<p>
        				<textarea name="comentario" cols="80" rows="5" id="textarea"><?php if(isset($_GET['user'])) {?>@<?php echo $_GET['user'];?><?php } ?> </textarea>
        			</p>
        			<p>
        				<input type="submit" <?php if(isset($_GET['id'])) { ?> name="reply"<?php } else { ?> name="comentar"<?php } ?>value="Comentar">
        			</p>
        		</center>
        	</form>
            <?php
                if(isset($_POST['comentar'])){
                    $query = mysqli_query($connect,"INSERT INTO comentarios (Nombre_Usuario, Comentario) values ('".$_SESSION['id']."','".$_POST['comentario']."')");   
                    if ($query) {
                        header("Location: comentarios.php"); 
                    }
                }
            ?>
            <?php
                if(isset($_POST['reply'])){
                    $query = mysqli_query($connect,"INSERT INTO comentarios (Nombre_Usuario, Comentario, Reply) values ('".$_SESSION['id']."','".$_POST['comentario']."','".$_GET['id']."')");   
                    if ($query) {
                        header("Location: comentarios.php"); 
                    }
                }
            ?>
            <br>
            <div>
                <div id="contain">
                    <ul id="comments">
                        <?php 
                            $comentarios = mysqli_query($connect,"SELECT * FROM comentarios WHERE Reply = 0 ORDER BY id_Comentario DESC");
                            while($row=mysqli_fetch_array($comentarios)){
                                $usuario = mysqli_query($connect,"SELECT * FROM usuario WHERE No_Boleta = '".$row['Nombre_Usuario']."'");
                                //echo $usuario;
                                $user = mysqli_fetch_array($usuario);
                                //echo $user;
                        ?>

                            <li class="cmmnt">
                                <div class="cmmnt-content">
                                    <header>
                                    <a href="#" class="userlink"><?php echo $user['Nombre_Usuario'];?></a>
                                    </header>
                                        <p> 
                                            <?php echo $row['Comentario'];?>
                                        </p>
                                            <span>
                                                <a href="comentarios.php?user=<?php echo $user['Nombre_Usuario'];?>&id=<?php echo $row['id_Comentario'];?>">
                                                Responder
                                                </a>
                                            </span>
                                </div>

                                <?php
                                    $contar = mysqli_num_rows(mysqli_query($connect,"SELECT * FROM comentarios WHERE Reply = '".$row['id_Comentario']."'"));
                                    if($contar != '0'){
                                        $reply = mysqli_query($connect,"SELECT * FROM comentarios WHERE Reply = '".$row['id_Comentario']."'");
                                        while ($rep=mysqli_fetch_array($reply)) {
                                            $usuario2 = mysqli_query($connect,"SELECT * FROM usuario WHERE No_Boleta = '".$rep['Nombre_Usuario']."'");
                                            $user2 = mysqli_fetch_array($usuario2);   
                                ?>

                                <ul class="replies">
                                    <li class="cmmnt">
                                        <div class="cmmnt-content">
                                            <header>
                                                <a href="#" class="userlink"><?php echo $user2['Nombre_Usuario'];?></a>
                                            </header>
                                        <p> 
                                            <?php echo $rep['Comentario'];?>
                                        </p>
                                        </div>
                                    </li>
                                </ul>
                            <?php  } } } ?>
                            </li>
                        
                    </ul>
                </div>
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
