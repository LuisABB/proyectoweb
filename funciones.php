<?php

//Evitar Inyerccion SQL
function clean($str){
	$var = strip_tags(addslashes(stripslashes(htmlspecialchars($str))));
	return $var;
}


?>