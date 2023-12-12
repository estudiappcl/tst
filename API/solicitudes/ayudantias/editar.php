<?php

header('Content-Type:application/json');

require_once __DIR__.("/../../conexiones/ayudantias.php");

$miPerfilConexion = new MiPerfilConexion();

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


echo json_encode($miPerfilConexion->editar(
    $id_ayudantia,
    $nombre_ayudantia,
    $descripcion,
    $Carrera,
    $Asignatura,
    $Materia,
    $fecha_de_inicio,
    $hora_termino,
    empty($participantes)? null :$participantes,
    empty($precio)? null : $precio,
    $ubicacion,
    $estado,
    $rut_ayudante
)); 