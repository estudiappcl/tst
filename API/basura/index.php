<?php
require_once __DIR__.("/conexiones/ayudantias.php");


$perfilConexion = new MiPerfilConexion();

$lista = $perfilConexion->seleccionar(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayudantias</title>
    <link rel="stylesheet" href="css/tabla.css">

    
</head>
<body>
<header class="header">
        <div class="container logo-container">
            <a href="#" class="logo"> </a>
            <nav class="navegacion">
                <ul>
                    
                    <li>  Bienvenido a la lista de ayudantias </a> </li>
                    <li>  A continuacion un listado </li>
                    
                </ul>
                <ul>
                    <li> <a href="inicio_ayudante.php">ir a inicio</a> </li>
                    <li> <a href="insertar_ayudantia.php">Crear ayudantia</a> </li>
                    </ul>
            </nav>
        </div>
    </header>
    <table>
        <thead>
            <tr>
                <th> id </th>
                <th> Nombre </th>
                <th> Descripcion </th>
                <th> Carrera </th>
                <th> Asignatura </th>
                <th> Materia </th>
                <th> Fecha inicio </th>
                <th> Fecha termino </th>
                <th> Participantes </th>
                <th> Precio </th>
                <th> Ubicacion </th>
                <th> Estado </th>
                <th> AUTOR </th>
                <th> Editar </th>
                <th> Eliminar </th>
            </tr>
        </thead>
        <?php
                foreach($lista as $ayudantias){
                    ?>
                    <tr class="datos">
                        <th> <?= $ayudantias->id_ayudantia ?></th>
                        <th> <?= $ayudantias->nombre_ayudantia ?></th>
                        <th> <?= $ayudantias->descripcion ?></th>
                        <th> <?= $ayudantias->Carrera ?></th>
                        <th> <?= $ayudantias->Asignatura ?></th>
                        <th> <?= $ayudantias->Materia?></th>
                        <th> <?= $ayudantias->fecha_de_inicio ?></th>
                        <th> <?= $ayudantias->hora_termino ?></th>
                        <th> <?= $ayudantias->participantes ?></th>
                        <th> <?= $ayudantias->precio ?></th>
                        <th> <?= $ayudantias->ubicacion ?></th>
                        <th> <?= $ayudantias->estado ?></th>
                        <th> <?= $ayudantias->rut_ayudante ?></th>

                        <th>  <a href="editar_ayudantia.php?id_ayudantia=<?=$ayudantias->id_ayudantia ?>">Editar</a> </th>
                        <th>  <a href="eliminar_ayudantia.php?id_ayudantia=<?=$ayudantias->id_ayudantia ?>">Eliminar</a> </th>
                    </tr>
                      <?php 
                }
            ?>
    </table>

</body>

</html>