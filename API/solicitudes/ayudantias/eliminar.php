<?php

header('Content-Type:application/json');

require_once __DIR__.("/../../conexiones/ayudantias.php");

$miPerfilConexion = new MiPerfilConexion();

$id_ayudantia = $_REQUEST['id_ayudantia']; 


echo json_encode($miPerfilConexion->eliminar($id_ayudantia)); 