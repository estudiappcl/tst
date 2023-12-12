<?php

session_start();

require_once __DIR__.("/conexiones/administracion.php");

$rut_admin = $_SESSION['rut_admin'];

$nombre_admin = $_SESSION['nombre_admin'];
$apellido_admin = $_SESSION['apellido_admin'];

if(!isset ($_SESSION['rut_admin'])){

    header("Location:/EstudiAPP/index.html");
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
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Crear Cuenta Ayudante
                            </a>          
                            <a class="nav-link " href="inicio_administracion.php" 
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Ver ayudantes
                            </a>
                            <a class="nav-link " href="administracion_ver_ayudantias.php" 
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Ver ayudantias
                            </a>
                            <div class="sb-sidenav-menu-heading" style="display:none">?? </div>
                            <a class="nav-link" href="" style="display:none"
                                ><div class="sb-nav-link-icon" ><i class="fas fa-chart-area"></i></div>
                                ??</a
                            ><a class="nav-link" href="" style="display:none"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                ??</a
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
                            
                                <div class="card-header"><h3 class="text-center font-weight-light my-3">Crear Ayudante</h3></div>
                                    <div class="card-body">
                                        <form action="recibir_insertar_ayudante.php" method="GET">
                    
                                            <div class="form-group">
                                                    
                                                <label class="small mb-3" >RUT del ayudante</label><input class="form-control py-4" id="rut" name="rut" type="text" placeholder="Ingrese el rut..." value="" required/>
                                                <hr style="border-color:white" 100%></hr>
                                            
                                            <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="small mb-1" >Nombres del ayudante</label><input class="form-control py-4" id="nombres_ayudante" name="nombres_ayudante" type="text" placeholder="ingrese los nombres..." value="" required/></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="small mb-1" >Apellidos del ayudante</label><input class="form-control py-4" id="apellidos_ayudante" name="apellidos_ayudante" type="text"  placeholder="ingrese los apellidos.." value="" required/></div>
                                                    </div>
                                            </div>    
                                            <div class="form-group">
                                                    
                                                <label class="small mb-3" >Carrera del ayudante</label><input class="form-control py-4" id="carrera_ayudante" name="carrera_ayudante" type="text" placeholder="ingrese la carrera..." value="" required/></div>
                                            <div class="form-group">
                                                    
                                                    <label class="small mb-3" >Direccion del ayudante</label><input class="form-control py-4" id="direccion_ayudante" name="direccion_ayudante" type="text" placeholder="Ingrese la direccion..." value="" required/></div>  
                                                    
                                            <div class="form-group">
                                                    
                                                <label class="small mb-3" >Telefono del ayudante</label><input class="form-control py-4" id="telefono_ayudante" name="telefono_ayudante" type="text" placeholder="Ingrese el telefono..." value="" required/></div>        

                                            <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="small mb-1" >Correo del ayudante</label><input class="form-control py-4" id="correo_ayudante" name="correo_ayudante" type="text" placeholder="ingrese el correo..." value="" required/></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"><label class="small mb-1" >contraseña del ayudante</label><input class="form-control py-4" id="password_ayudante" name="password_ayudante" type="text"  placeholder="ingrese la contraseña.." value="" required/></div>
                                                    </div>
                                            </div> 
                                            
                                                    <button class="btn btn-primary btn-block" type="submit"> Agregar ayudante  </button>

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
