<?php
$link = mysql_connect("localhost", "root","");
if(!$link)
{
	die("No se pudo establecer la conexi&oacute;n con el servidor:".mysql_error());
}

//Se selecciona la BD a utilizar
$db_sel = mysql_select_db('bd_ais',$link);
if(!$db_sel)
{
	die('No se pudo seleccionar la BD:'.mysql_error());
}

?>