<?php

header('Content-Type:application/json');

require_once __DIR__.("/../../conexiones/ayudantias.php");

$miPerfilConexion = new MiPerfilConexion();


echo json_encode($miPerfilConexion->seleccionar()); 