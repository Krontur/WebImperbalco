<?php
//Conectar servidor MySQL
require 'funciones.php';
conect_server();
//Consulta de idcategoria
$consulta = mysql_query("select n.id id,n.fecha,n.titulo,n.contenido,n.idimg,"
        . "c.categoria cate from noticias n inner join categorias c on "
        . "n.idcategoria=c.id where n.id =" . $_REQUEST['id'] . ";") or die("Fallo en consulta");
$nfilas = mysql_num_rows($consulta);
$filas = mysql_fetch_array($consulta);

$dia = date(j, strtotime($filas['fecha']));
$mes = date(n, strtotime($filas['fecha']));
$anyo = date(Y, strtotime($filas['fecha']));


header("Location:http://localhost/PhpProject/quinta.php?titulo=" . urlencode($filas['titulo']) .
                "&contenido=" . urlencode($filas['contenido']) .
                "&dia=" . urlencode($dia) .
                "&mes=" . urlencode($mes) .
                "&anyo=" . urlencode($anyo) .
                "&categoria=" . urlencode($filas['cate']) .
                "&id=" . urlencode($filas['id'])) .
        "&idimg=" . urlencode($filas['idimg']);

exit;
?>