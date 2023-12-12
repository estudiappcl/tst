<?php
error_reporting(E_ALL);

header('Content-Type:application/json');

require_once __DIR__.("/../../conexiones/ayudantes.php");

$AyudanteConexion = new AyudanteConexion();

$rut = $_REQUEST['rut']; 


echo json_encode($AyudanteConexion->eliminar($rut)); 