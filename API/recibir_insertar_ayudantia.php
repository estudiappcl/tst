<?php
error_reporting(0);
session_start();
require_once __DIR__.("/conexiones/ayudantias.php");

$rut_ayudante = $_SESSION['rut'];
$nombres_ayudante = $_SESSION['nombres_ayudante'];
$apellidos_ayudante = $_SESSION['apellidos_ayudante'];

if(!isset ($_SESSION['rut'])){
    header("Location: ../../index.html");
}



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

echo json_encode($miPerfilConexion->insertar(
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


header('Location: inicio_ayudante.php');
exit();


