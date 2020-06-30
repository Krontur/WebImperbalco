<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function conect_server() {
    //Conectar servidor MySQL
    $server = "db529412683.db.1and1.com:3306";
    $username = "dbo529412683";
    $password = "2308212";
    $db = "db529412683";
    $conexion = mysql_connect($server, $username, $password) or die("Error al conectar");
    mysql_select_db($db) || die("No se puede seleccionar la base de datos.");
}

function mensaje($mensaje) {
    echo $mensaje . '<BR>';
}

function autenticado() {
    session_start();
    return isset($_SESSION['usuario_valido']);
}

