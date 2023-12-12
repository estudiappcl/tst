<?php

session_start();
require_once __DIR__.("/conexiones/ayudantias.php");


if(!isset ($_SESSION['rut'])){
    header("Location:index.html");
}

?>

<?php
$perfilConexion = new MiPerfilConexion();

$id_ayudantia = $_REQUEST['id_ayudantia'];
//$editado = $_REQUEST['editado'];

?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ayudantia </title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>


<?php
    if(isset($id_ayudantia)){
        $ayudantias = $perfilConexion->encontrar($id_ayudantia); 
    }else{
        echo   '<p> no se ha ingresado la id de la ayudantia para editar </p></body></html >';
        exit();
    }
?>
<?php
/*
    if(isset($editado)){
        echo '<p>Perfil editado</p>';
    }
*/
?>
    <center>
        <div class="formulario">
            <form action="recibir_edicion_ayudantia.php" method="GET">
                <h1>Editar ayudantia</h1>
                <hr width="100%"> 
                <div class="parte" style="display: none">
                    <label> ID </label>
                    <input placeholder="id..." id="id_ayudantia"  name="id_ayudantia" type="hidden" value="<?= $ayudantias->id_ayudantia ?>" required>
                </div>
                <div class="parte">
                    <label> Nombre </label>
                    <input placeholder="Nombre..." id="nombre_ayudantia"  name="nombre_ayudantia" type="text" value="<?= $ayudantias->nombre_ayudantia ?>" required>
                </div>
                <div class="parte">
                    <label> Descripcion </label>
                    <input placeholder="Descripcion..." id="descripcion"  name="descripcion" type="text" value="<?= $ayudantias->descripcion ?>">
                </div>
                <div class="parte">
                    <label> Carrera </label>
                    <input placeholder="Carrera..." id="Carrera"  name="Carrera" type="text" value="<?= $ayudantias->Carrera ?>" required>
                </div>
                <div class="parte">
                    <label> Asignatura </label>
                    <input placeholder="Asignatura..." id="Asignatura"  name="Asignatura" type="text" value="<?= $ayudantias->Asignatura ?>" required>
                </div>
                <div class="parte">
                    <label> Materia </label>
                    <input placeholder="Materia..." id="Materia"  name="Materia" type="text" value="<?= $ayudantias->Materia ?>">
                </div>
                <div class="parte">
                    <label> Fecha Inicio </label>
                    <input placeholder="Fecha Inicio..." id="fecha_de_inicio"  name="fecha_de_inicio" type="datetime-local" value="<?= date("Y-m-d\TH:i:s",strtotime($ayudantias->fecha_de_inicio)) ?>" required>
                </div>
                <div class="parte">
                    <label> Fecha Termino </label>
                    <input placeholder="Fecha Termino..." id="hora_termino"  name="hora_termino" type="datetime-local" value="<?= date("Y-m-d\TH:i:s",strtotime($ayudantias->hora_termino)) ?>" required>
                </div>
                <div class="parte">
                    <label> Maximo de Participantes </label>
                    <input placeholder="Participantes..." id="participantes"  name="participantes" type="text" value="<?= $ayudantias->participantes ?>" required>
                </div>
                <div class="parte">
                    <label> Precio </label>
                    <input placeholder="Precio..." id="precio"  name="precio" type="number" step="1.00" value="<?= $ayudantias->precio ?>">
                </div>
                <div class="parte">
                    <label> Ubicacion </label>
                    <input placeholder="Ubicacion..." id="ubicacion"  name="ubicacion" type="text" value="<?= $ayudantias->ubicacion ?>">
                </div>
                <div class="parte" style ="display: none">
                    <label> Ubicacion </label>
                    <input placeholder="rut ayudante..." id="rut_ayudante"  name="rut_ayudante" type="text" value="<?= $ayudantias->rut_ayudante ?>">
                </div>
                <div class="parte" style="display: none">
                    <label> Estado </label>
                    <input id="estado"  name="estado" type="checkbox" value="1">
                </div>
                <button type="submit"> Editar ayudantia </button>
                <hr width="100%">
                <a  href="index.php">Volver </a>
            </form>
        </div>
    </center>

</body>
</html>