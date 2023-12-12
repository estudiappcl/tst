<?php

header('Content-Type:application/json');

require_once __DIR__.("/../../conexiones/administracion.php");

$miAdministracion = new MiAdministracion();


echo json_encode($miAdministracion->seleccionar()); 