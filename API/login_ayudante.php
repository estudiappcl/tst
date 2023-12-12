<?php

require "conexion.php";


session_start();

if($_POST){
    
    $correo_ayudante = $_POST['correo_ayudante'];
    $password_ayudante = $_POST['password_ayudante'];

    $sql="SELECT rut,nombres_ayudante,apellidos_ayudante,carrera_ayudante,direccion_ayudante,
    telefono_ayudante,correo_ayudante,password_ayudante FROM ayudantes WHERE correo_ayudante='$correo_ayudante'";

    //echo $sql;

    $resultado = $mysqli->query($sql);
    $num = $resultado->num_rows;


    if($num>0){
        $row = $resultado->fetch_assoc();
        $password_ayudante_bd   = $row['password_ayudante'];

        $pass_c = ($password_ayudante);

        if($password_ayudante_bd == $pass_c ){

            $_SESSION['rut'] = $row['rut'];
            $_SESSION['nombres_ayudante'] = $row['nombres_ayudante'];
            $_SESSION['apellidos_ayudante'] = $row['apellidos_ayudante'];

           
            
            header("Location: inicio_ayudante.php");
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
    <title>Login Ayudante</title>
    <link href="css/diseño_login.css" rel="stylesheet">
</head>
<body>

    
    <div class="main">
        <div class="formulario">
            <h1>Ingresar ayudante</h1>
            <hr width="100%">
            <form method="POST" action="<?php echo $_SERVER ['PHP_SELF'];  ?>" >
                <label for=""> Ingresar nombre </label>
                <input placeholder="Escriba su correo registrado" name="correo_ayudante" type="text">
                <br><br>
                <label for=""> Ingresar Contraseña </label>
                <input placeholder="Escriba su contraseña" name="password_ayudante" type="password">
                <br><br>
                
                <button class="BA" type="submit"> Ingresar </button>
            </form>
            <br> <hr width="100%">
                
            <a href=""> Solicitar Cuenta</a>
            
            <div id="msg_error" class="alert alert-danger" role="alert"></div>
           
        </div>
    </div>

    
</body>
</html>