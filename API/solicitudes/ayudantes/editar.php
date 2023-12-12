<?php

header('Content-Type:application/json');

require_once __DIR__.("/../../conexiones/ayudantes.php");

$AyudanteConexion = new AyudanteConexion();


$rut                 = $_REQUEST['rut'];
$nombres_ayudante             = $_REQUEST['nombres_ayudante']; 
$apellidos_ayudante           = $_REQUEST['apellidos_ayudante'];
$carrera_ayudante             = $_REQUEST['carrera_ayudante'];
$direccion_ayudante           = $_REQUEST['direccion_ayudante']; 
$telefono_ayudante            = $_REQUEST['telefono_ayudante']; 
$correo_ayudante              = $_REQUEST['correo_ayudante'];
$password_ayudante            = $_REQUEST['password_ayudante'];   



echo json_encode($AyudanteConexion->editar(
    $rut,
    $nombres_ayudante,
    $apellidos_ayudante,
    $carrera_ayudante,
    $direccion_ayudante,
    $telefono_ayudante,
    $correo_ayudante,
    $password_ayudante

)); 