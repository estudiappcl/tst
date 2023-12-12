<?php
error_reporting(E_ALL);
require_once __DIR__.('/conexiones/ayudantes.php');

$rut = $_REQUEST['rut'];

$AyudanteConexion = new AyudanteConexion();
$AyudanteConexion->eliminar($rut);


header('Location: inicio_administracion.php');
exit();