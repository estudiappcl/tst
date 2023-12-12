<?php

error_reporting(0);
session_start();
require_once __DIR__.("/conexiones/ayudantias.php");

$rut = $_SESSION['rut'];
$nombres_ayudante = $_SESSION['nombres_ayudante'];
$apellidos_ayudante = $_SESSION['apellidos_ayudante'];

if(!isset ($_SESSION['rut'])){
    
    
    session_unset();
    session_destroy();
    header("Location:../../index.html");
}


$perfilConexion = new MiPerfilConexion();

$lista = $perfilConexion->seleccionar(); 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Ayudante</title>
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="#">EstudiAPP</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <!--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>-->
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i> <?php echo $nombres_ayudante;?> <?php echo $apellidos_ayudante;    ?>     </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Perfil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Cerrar Sesion</a>
                    </div>
                </li>
            </ul>
    </nav>

    <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <div class="sb-sidenav-menu-heading">Menus</div>
                            <a class="nav-link collapsed" href="insertar_ayudantia.php" 
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Crear Ayudantia
                            </a>          
                            <a class="nav-link " href="#" 
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Mis Ayudantias
                            </a>
                            <div class="sb-sidenav-menu-heading">Próximamente</div>
                            <a class="nav-link" href="#"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Próximamente </a
                            ><a class="nav-link" href="#"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Próximamente </a
                            >
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <h1 class="mt-4">Inicio</h1>
                    <hr 100%></hr>
                        <div class="card mb-4">
                            
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Ayudantias</div>
                            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                            <div class="input-group">
                            <input class="form-control" type="text" placeholder="Buscar Ayudantia..." aria-label="Search" aria-describedby="basic-addon2" />
                            <div class="input-group-append">
                             <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                             </div>
                            </div>
                             </form>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Descripcion</th>
                                                <th>Carrera</th>
                                                <th>Asignatura</th>
                                                <th>Materia</th>
                                                <th>Inicio</th>
                                                <th>Termino</th>
                                                <th>Participantes</th>
                                                <th>Precio</th>
                                                <th>Ubicacion</th>
                                                <th>Estado</th>
                                                <th>Autor</th>
                                                <th>Editar</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>

                 <?php
                foreach($lista as $ayudantias){
                    ?>
                    <tr >
                        <td> <?= $ayudantias->id_ayudantia ?></td>
                        <td> <?= $ayudantias->nombre_ayudantia ?></td>
                        <td> <?= $ayudantias->descripcion ?></td>
                        <td> <?= $ayudantias->Carrera ?></td>
                        <td> <?= $ayudantias->Asignatura ?></td>
                        <td> <?= $ayudantias->Materia?></td>
                        <td> <?= $ayudantias->fecha_de_inicio ?></td>
                        <td> <?= $ayudantias->hora_termino ?></td>
                        <td> <?= $ayudantias->participantes ?></td>
                        <td> <?= $ayudantias->precio ?></td>
                        <td> <?= $ayudantias->ubicacion ?></td>
                        <td> <?= $ayudantias->estado ?></td>
                        <td> <?= $ayudantias->rut_ayudante ?></td>

                        <td>  <a href="editar_ayudantia.php?id_ayudantia=<?=$ayudantias->id_ayudantia ?>">Editar</a> </td>
                        <td>  <a href="eliminar_ayudantia.php?id_ayudantia=<?=$ayudantias->id_ayudantia ?>">Eliminar</a> </td>
                    </tr>
                      <?php 
                }
            ?>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Descripcion</th>
                                                <th>Carrera</th>
                                                <th>Asignatura</th>
                                                <th>Materia</th>
                                                <th>Inicio</th>
                                                <th>Termino</th>
                                                <th>Participantes</th>
                                                <th>Precio</th>
                                                <th>Ubicacion</th>
                                                <th>Estado</th>
                                                <th>Autor</th>
                                                <th>Editar</th>
                                                <th>Eliminar</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; EstudiAPP </div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>


</body>

</html>