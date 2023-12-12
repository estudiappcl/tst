<?php

session_start();

$rut_ayudante = $_SESSION['rut'];
//echo ("$rut_ayudante");
$nombres_ayudante = $_SESSION['nombres_ayudante'];
$apellidos_ayudante = $_SESSION['apellidos_ayudante'];

if(!isset ($_SESSION['rut'])){
    header("Location:index.html");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Ayudantia</title>
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    
</head>
<body>


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
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Crear Ayudantia
                            </a>          
                            <a class="nav-link " href="inicio_ayudante.php" 
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Mis Ayudantias
                            </a>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts</a
                            ><a class="nav-link" href="tables.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables</a
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
                            
                                <div class="card-header"><h3 class="text-center font-weight-light my-3">Crear Ayudantia</h3></div>
                                    <div class="card-body">
                                        <form action="recibir_insertar_ayudantia.php" method="POST">
                    
                                            <div class="form-group">
                                                    
                                                <label class="small mb-3" >Nombre de la Ayudantia</label><input class="form-control py-4" id="nombre_ayudantia" name="nombre_ayudantia" type="text" placeholder="Nombre de la ayudantia..." value="" required/>
                                                <hr style="border-color:white" 100%></hr>
                                            <div class="form-group">
                                            
                                                    <label class="small mb-2" >Descripcion de la Ayudantia</label><input class="form-control py-4" id="descripcion" name="descripcion" type="text" placeholder="Descripcion de la Ayudantia..." value="" required/>
                                                                        
                                            </div>
                                            
                                            <div class="form-row">
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="small mb-1" >Carrera</label><input class="form-control py-4" id="Carrera" name="Carrera" type="text" placeholder="Carrera..." value="" required/></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="small mb-1" >Asignatura</label><input class="form-control py-4" id="Asignatura" name="Asignatura" type="text" placeholder="Asignatura..." value="" required/></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"><label class="small mb-1" >Materia</label><input class="form-control py-4" id="Materia" name="Materia" type="text" placeholder="Materia..." value="" required /></div>
                                                    </div>
                                            </div>
                                            <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="small mb-1" >Fecha de inicio</label><input class="form-control py-4" id="fecha_de_inicio" name="fecha_de_inicio" type="datetime-local" value=""  required/></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="small mb-1" >Fecha de termino</label><input class="form-control py-4" id="hora_termino" name="hora_termino" type="datetime-local" value="" required/></div>
                                                    </div>
                                            </div>
                                            <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="small mb-1" >Maximo de Alumnos</label><input class="form-control py-4" id="participantes" name="participantes" type="text" placeholder="ingrese el maximo de alumnos..." value="" /></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="small mb-1" >Precio</label><input class="form-control py-4" id="precio" name="precio" type="number" step="10.00" placeholder="ingrese el Precio..." value=""/></div>
                                                    </div>
                                            </div>

                                            <div class="form-group">
                                                    
                                                    <label class="small mb-3" >Ubicación</label><input class="form-control py-4" id="ubicacion" name="ubicacion" type="text" placeholder="Ubicación..." value="" required/></div>

                                            <div class="form-group" style="display:none" >
                                                    
                                                    <label class="small mb-3">Estado</label><input class="form-control py-4" id="estado" name="estado" type="checkbox"  value="1"/></div>    
                                            <div class="form-group" style="display:none">
                                                    
                                                    <label class="small mb-3">Rut ayudante</label><input class="form-control py-4" id="rut_ayudante" name="rut_ayudante" type="text" placeholder="rut_ayudante" value="<?=$rut_ayudante?>"/></div>
                                                    <button class="btn btn-primary btn-block color:red" type="submit"> Agregar ayudantia  </button>
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


</html>
