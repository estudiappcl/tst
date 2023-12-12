<?php

header('Content-Type:application/json');

require_once __DIR__.("/../../conexiones/ayudantes.php");

$AyudanteConexion = new AyudanteConexion();


echo json_encode($AyudanteConexion->seleccionar()); 