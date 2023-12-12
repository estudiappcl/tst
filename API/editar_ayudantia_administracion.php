<?php



session_start();
require_once __DIR__.("/conexiones/ayudantias.php");
require_once __DIR__.("/conexiones/administracion.php");

$rut_admin = $_SESSION['rut_admin'];

$nombre_admin = $_SESSION['nombre_admin'];
$apellido_admin = $_SESSION['apellido_admin'];

if(!isset ($_SESSION['rut_admin'])){

    header("Location:/EstudiAPP/index.html");
}

require_once __DIR__.("/conexiones/ayudantias.php");
$perfilConexion = new MiPerfilConexion();

$id_ayudantia = $_REQUEST['id_ayudantia'];
?>


<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ayudantia </title>

    <link href="css/styles.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>


<?php
/*
    if(isset($editado)){
        echo '<p>Perfil editado</p>';
    }
*/
?>
<body class="sb-nav-fixed">


    <?php
    if(isset($id_ayudantia)){
        $ayudantias = $perfilConexion->encontrar($id_ayudantia); 
    }else{
        echo   '<p> no se ha ingresado la id de la ayudantia para editar </p></body></html >';
        exit();
    }
    ?>


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
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Crear Ayudantia
                            </a>          
                            <a class="nav-link " href="inicio_ayudante.php" 
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Mis Ayudantias
                            </a>
                            <div class="sb-sidenav-menu-heading">???</div>
                            <a class="nav-link" href="charts.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                ???</a
                            ><a class="nav-link" href="tables.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                ???</a
                            >
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                   
                <hr style="border-color:white" 100%></hr>
                    <div class="row justify-content-center">
                        <div class="card mb-4">
                            
                                <div class="card-header"><h3 class="text-center font-weight-light my-3">Editar Ayudantia</h3></div>
                                    <div class="card-body">
                                        <form action="recibir_edicion_ayudantia_administracion.php" method="GET">
                                            <div class="form-group" style="display:none">
                                                    
                                                    <label class="small mb-3" >ID ayudantia</label><input class="form-control py-4" id="id_ayudantia" name="id_ayudantia" type="hidden" placeholder="Nombre de la ayudantia..." value="<?= $ayudantias->id_ayudantia ?>" required/></div>
                                                    

                                            <div class="form-group">
                                                    
                                                <label class="small mb-3" >Nombre de la Ayudantia</label><input class="form-control py-4" id="nombre_ayudantia" name="nombre_ayudantia" type="text" placeholder="Nombre de la ayudantia..." value="<?= $ayudantias->nombre_ayudantia ?>" required/></div>
                                                <hr style="border-color:white" 100%></hr>
                                            <div class="form-group">
                                            
                                                    <label class="small mb-2" >Descripcion de la Ayudantia</label><input class="form-control py-4" id="descripcion" name="descripcion" type="text" placeholder="Descripcion de la Ayudantia..." value="<?= $ayudantias->descripcion ?>" required/>
                                                                        
                                            </div>
                                            
                                            <div class="form-row">
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="small mb-1" >Carrera</label><input class="form-control py-4" id="Carrera" name="Carrera" type="text" placeholder="Carrera..." value="<?= $ayudantias->Carrera ?>" required/></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="small mb-1" >Asignatura</label><input class="form-control py-4" id="Asignatura" name="Asignatura" type="text" placeholder="Asignatura..." value="<?= $ayudantias->Asignatura ?>" required/></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="small mb-1" >Materia</label><input class="form-control py-4" id="Materia" name="Materia" type="text" placeholder="Materia..." value="<?= $ayudantias->Materia ?>" required /></div>
                                                    </div>
                                            </div>
                                            <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="small mb-1" >Fecha de inicio</label><input class="form-control py-4" id="fecha_de_inicio" name="fecha_de_inicio" type="datetime-local" value="<?= date("Y-m-d\TH:i:s",strtotime($ayudantias->fecha_de_inicio)) ?>"  required/></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="small mb-1" >Fecha de termino</label><input class="form-control py-4" id="hora_termino" name="hora_termino" type="datetime-local" value="<?= date("Y-m-d\TH:i:s",strtotime($ayudantias->hora_termino)) ?>" required/></div>
                                                    </div>
                                            </div>
                                            <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="small mb-1" >Maximo de Alumnos</label><input class="form-control py-4" id="participantes" name="participantes" type="text" placeholder="ingrese el maximo de alumnos..." value="<?= $ayudantias->participantes ?>" /></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="small mb-1" >Precio</label><input class="form-control py-4" id="precio" name="precio" type="number" step="10.00" placeholder="ingrese el Precio..." value="<?= $ayudantias->precio ?>"/></div>
                                                    </div>
                                            </div>

                                            <div class="form-group">
                                                    
                                                    <label class="small mb-3" >Ubicación</label><input class="form-control py-4" id="ubicacion" name="ubicacion" type="text" placeholder="Ubicación..." value="<?= $ayudantias->ubicacion ?>" required/></div>

                                            <div class="form-group" style="display:none" >
                                                    
                                                    <label class="small mb-3">Estado</label><input class="form-control py-4" id="estado" name="estado" type="checkbox"  value="1"/></div>    
                                            <div class="form-group" style="display:none">
                                                    
                                                    <label class="small mb-3">Rut ayudante</label><input class="form-control py-4" id="rut_ayudante" name="rut_ayudante" type="text" placeholder="rut_ayudante" value="<?= $ayudantias->rut_ayudante ?>"/></div>
                                                    <button class="btn btn-primary btn-block" type="submit"> Editar ayudantia  </button>

                                        </form>   
                                        
                            
                                    </div>
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

</body>
</html>