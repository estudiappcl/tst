<?php
error_reporting(0);
require_once __DIR__.('/conexiones/ayudantias.php');

$id_ayudantia = $_REQUEST['id_ayudantia'];

$perfilConexion = new MiPerfilConexion();
$perfilConexion->eliminar($id_ayudantia);


header('Location: administracion_ver_ayudantias.php');
exit();