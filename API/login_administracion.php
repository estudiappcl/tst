<?php

require "conexion.php";




if($_POST){
    
    $correo_admin = $_POST['correo_admin'];
    $password_admin = $_POST['password_admin'];

    $sql="SELECT rut_admin,nombre_admin,apellido_admin,area_admin,telefono_admin,
    correo_admin,password_admin FROM administracion WHERE correo_admin='$correo_admin'";

    //echo $sql;

    $resultado = $mysqli->query($sql);
    $num = $resultado->num_rows;


    if($num>0){
        
        session_start();
        $row = $resultado->fetch_assoc();
        $password_admin_bd   = $row['password_admin'];

        $pass_c = ($password_admin);

        if($password_admin_bd == $pass_c ){
            
            $_SESSION['rut_admin'] = $row['rut_admin'];
            $_SESSION['nombre_admin'] = $row['nombre_admin'];
            $_SESSION['apellido_admin'] = $row['apellido_admin'];

            
            
            header("Location: inicio_administracion.php");
        }else{
            echo ("La contraseña no coincide");
        }

    }else{
        echo ("El usuario no existe");
    }

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login administracion</title>
    <link href="css/diseño_login.css" rel="stylesheet">
</head>
<body>
    <div class="mainA">
        <div class="formulario">
            <h1>Ingresar Administacion</h1>
            <hr width="100%">
            <form method="POST" action="<?php echo $_SERVER ['PHP_SELF'];  ?>">
                <label for=""> Ingresar nombre </label>
                <input placeholder="Nombre..." name="correo_admin" type="text">
                <br><br>
                <label for=""> Ingresar Contraseña </label>
                <input placeholder="Contraseña..." name="password_admin" type="password">
                <br><br>
                <button class="BR" type="submit"> Ingresar </button>
            </form>
            <br> <hr width="100%">
            <a href=""> ¿olvido su contaseña?</a>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p>Siguenos en...</p>
            <a> <img src="https://logodownload.org/wp-content/uploads/2017/04/instagram-logo.png"> </a>
            <a> <img src="https://logodownload.org/wp-content/uploads/2014/09/twitter-logo-4.png"> </a>
            <p>Correo1234@gmail.com</p>
        </div>
    </footer>
</body>
</html>