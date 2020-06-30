<?php
//Conectar servidor MySQL
require 'funciones.php';
conect_server();
$idimg = $_REQUEST['idimg'];
//Consulta de idcategoria
$consulta = mysql_query("select * from imagenes where id =".$idimg.";") or die("Fallo en consulta");
$filas = mysql_fetch_array($consulta) or die("Error de datos.");
$extension = $filas['imgType'];
$imgData = $filas['imgData'];
//Mostrar la imagen
header("Content-type:".$filas["imgType"]); 
echo $filas["imgData"];
?>
