<?php
error_reporting(E_ALL);
session_start();
require_once __DIR__.("/conexiones/ayudantes.php");
require_once __DIR__.("/conexiones/administracion.php");

$rut_admin = $_SESSION['rut_admin'];

$nombre_admin = $_SESSION['nombre_admin'];
$apellido_admin = $_SESSION['apellido_admin'];

if(!isset($_SESSION['rut_admin'])){
    
    session_unset();
    session_destroy();
    header("Location: ../../index.html");
    
    
}
   


$AyudanteConexion = new AyudanteConexion();
$lista = $AyudanteConexion->seleccionar(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Administracion</title>
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
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i> <?php echo $nombre_admin;?> <?php echo $apellido_admin;    ?>     </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
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
                            <a class="nav-link collapsed" href="crear_ayudante.php" 
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Crear Cuenta Ayudante
                            </a>          
                            <a class="nav-link " href="#" 
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Ver ayudantes
                            </a>
                            <a class="nav-link " href="administracion_ver_ayudantias.php" 
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Ver ayudantias
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
                            
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Ayudantes</div>
                            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                            <div class="input-group">
                            <input class="form-control" type="text" placeholder="Buscar Ayudante..." aria-label="Search" aria-describedby="basic-addon2" />
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
                        <td> <?= $ayudantes->rut ?></th>
                        <td> <?= $ayudantes->nombres_ayudante ?></td>
                        <td> <?= $ayudantes->apellidos_ayudante ?></td>
                        <td> <?= $ayudantes->carrera_ayudante ?></td>
                        <td> <?= $ayudantes->direccion_ayudante ?></td>
                        <td> <?= $ayudantes->telefono_ayudante?></td>
                        <td> <?= $ayudantes->correo_ayudante ?></td>
                        <td> <?= $ayudantes->password_ayudante ?></td>
                        
                        <td>  <a href="editar_ayudante.php?rut=<?=$ayudantes->rut ?>">Editar</a> </td>
                        <td>  <a href="eliminar_ayudante.php?rut=<?=$ayudantes->rut ?>">Eliminar</a> </td>
                    </tr>
                      <?php 
                }
            ?>
                                        <tfoot>
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


