<?php
session_start();
require_once __DIR__.("/conexiones/ayudantias.php");

$rut_admin = $_SESSION['rut_admin'];
$nombre_admin = $_SESSION['nombre_admin'];
$apellido_admin = $_SESSION['apellido_admin'];

if(!isset ($_SESSION['rut_admin'])){

    header("Location:/EstudiAPP/index.html");
}


$id_ayudantia                 = $_REQUEST['id_ayudantia'];
$nombre_ayudantia             = $_REQUEST['nombre_ayudantia'];
$descripcion                  = $_REQUEST['descripcion']; 
$Carrera                      = $_REQUEST['Carrera'];
$Asignatura                   = $_REQUEST['Asignatura'];
$Materia                      = $_REQUEST['Materia']; 
$fecha_de_inicio              = $_REQUEST['fecha_de_inicio']; 
$hora_termino                 = $_REQUEST['hora_termino'];
$participantes                = $_REQUEST['participantes'];   
$precio                       = $_REQUEST['precio']; 
$ubicacion                    = $_REQUEST['ubicacion']; 
$estado                       = $_REQUEST['estado'];
$rut_ayudante                 = $_REQUEST['rut_ayudante'];

$miPerfilConexion = new MiPerfilConexion();

echo json_encode($miPerfilConexion->editar(
    $id_ayudantia,
    $nombre_ayudantia,
    $descripcion,
    $Carrera,
    $Asignatura,
    $Materia,
    $fecha_de_inicio,
    $hora_termino,
    $participantes,
    $precio,
    $ubicacion,
    $estado,
    $rut_ayudante
));

header('Location: administracion_ver_ayudantias.php');
exit();

//header('Location: editar_ayudantia.php?id_ayudantia='.$id_ayudantia.'&editado=1');