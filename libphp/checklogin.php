<?php
require "funciones.php";
if (autenticado()) {
    //Estamos intentando validarnos cuando ya lo estamos
    header("Location: ../formupload.php");
    exit;
} else {
    //Estamos intentando validarnos
    if (isset($_REQUEST['user']) && isset($_REQUEST['password'])) {
        conect_server();
        //Consultar todas las filas de la tabla noticias
        $consulta = mysql_query("SELECT * FROM usuarios WHERE user='"
                . $_REQUEST['user'] . "' and password='" . $_REQUEST['password'] . "'") or die("Hay un error en la sentecia");
        //Ver cuantas filas hay
        $nfilas = mysql_num_rows($consulta);
        //Hay filas?
        if ($nfilas > 0) {
            //El usuario existe en la base de datos
            //y su username y password coinciden
            //con los introducidos en el formulario
            $fila = mysql_fetch_array($consulta) or die("Error recuperando datos.");
            session_start();
            $_SESSION['usuario_valido'] = $fila['nombre'] . " " . $fila['apellidos'];
            header("Location: ../formupload.php");
            exit;
        } else {
            //La autenticaciónn ha ido mal
            $error_login = "Su usuario o contraseña son incorrectos,"
                    . " vuelva a introducirlos correctamente.";
            header("Location:../login.php?error_login=".urlencode($error_login));
            exit;
        }
    } else {
        mensaje("No se puede validar la información.");
    }
}			
