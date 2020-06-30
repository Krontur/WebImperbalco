<?php
//Conectar servidor MySQL
require 'funciones.php';
conect_server();
//Borrado de noticia
$borrado = mysql_query("delete from obras where id=".$_REQUEST['id']) or die ("No se ha podido borrar");
$borradoimg = mysql_query("delete from imagenes where id=".$_REQUEST['idimg']) or die ("No se ha podido borrar");
mysql_close();
header("Location: ../imgedit.php");
?>