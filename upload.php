<?php

//VARIABLES
$idimg = $_REQUEST['idimg'];

//Conectar servidor MySQL
require 'libphp/funciones.php';
conect_server();

if (!isset($_REQUEST['contenido']) || $_REQUEST['contenido'] == '') {
    header("Location: formupload.php?contenido=" . urlencode($contenido));
    exit;
} else {
    $contenido = trim($_REQUEST['contenido']);
}

if (!empty($_FILES['archivo']['name'])) {
    if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
        if ($_FILES['archivo']['size'] > 1024000) {
            $error_sizeFile = 'Está intentando subir un archivo de mas de 2MB, operación no permitida';
        }
        if ($_FILES['archivo']['type'] != 'image/jpeg' && $_FILES['archivo']['type'] != 'image/gif' &&
                $_FILES['archivo']['type'] != 'image/png') {
            $error_typeFile = 'Solo se puede subir archivo del tipo jpeg, gif o png.';
        }
        $imgData = addslashes(file_get_contents($_FILES['archivo']['tmp_name']));
        $imgType = $_FILES['archivo']['type'];
        mysql_query("insert into imagenes (imgType, imgData, imgName) values ('" .
                        $imgType . "','" . $imgData . "','" . $_FILES['archivo']['name'] . "');") or die("Error de inserción de imagen");
        $idimg = mysql_insert_id();
    } else {
        $error_upload = "No se ha podido subir el fichero.\n";
    }
} else {
    $error_upload = "No se ha podido subir el fichero.\n";
}

if (isset($error_sizeFile) || isset($error_typeFile) || isset($error_upload)) {
    header("Location: formupload.php?contenido=" . urlencode($contenido) . "&idimg=" . $idimg . "&error_accept=" . urlencode($error_accept) . "&error_sizeFile=" . urlencode($error_sizeFile) .
            "&error_typeFile=" . urlencode($error_typeFile) . "&error_upload=" . urlencode($error_upload));
    exit;
}
$insert = "INSERT INTO `obras` (`contenido`,`idimg`) " .
        "VALUES ('" . $contenido . "'," . $idimg . ");";
mysql_query($insert) or die($insert . " " . "No se ha podido subir la noticia.");
mysql_close();
header("Location: formupload.php");
exit();
?>

