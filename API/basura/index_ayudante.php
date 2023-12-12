<?php
require_once __DIR__.("/conexiones/ayudantes.php");


$AyudanteConexion = new AyudanteConexion();

$lista = $AyudanteConexion->seleccionar(); 
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
<h1> Bienvenido al index de ayudantes  </h1> 
    <p><a href="index.html">ATRAS</a></p>
<h2> a continuacion un listado de los ayudantes  </h2>

    <p><a href="insertar_ayudante.php">Registrarme</a></p>
    <table>
        <thead>
            <tr>
                <th> RUT </th>
                <th> Nombres </th>
                <th> Apellidos </th>
                <th> Carrera </th>
                <th> Direccion </th>
                <th> Telefono </th>
                <th> Correo </th>
                <th> Contraseña </th>
                <th> Editar </th>
                <th> Eliminar </th>
                
            </tr>
        </thead>
        <?php
                foreach($lista as $ayudantes){
                    ?>
                    <tr class="datos">
                        <th> <?= $ayudantes->rut ?></th>
                        <th> <?= $ayudantes->nombres_ayudante ?></th>
                        <th> <?= $ayudantes->apellidos_ayudante ?></th>
                        <th> <?= $ayudantes->carrera_ayudante ?></th>
                        <th> <?= $ayudantes->direccion_ayudante ?></th>
                        <th> <?= $ayudantes->telefono_ayudante?></th>
                        <th> <?= $ayudantes->correo_ayudante ?></th>
                        <th> <?= $ayudantes->password_ayudante ?></th>
                        
                        <th>  <a href="editar_ayudante.php?rut=<?=$ayudantes->rut ?>">Editar</a> </th>
                        <th>  <a href="eliminar_ayudante.php?rut=<?=$ayudantes->rut ?>">Eliminar</a> </th>
                    </tr>
                      <?php 
                }
            ?>
    </table>

</body>
</html>