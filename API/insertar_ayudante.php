<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar ayudante</title>
    <link rel="stylesheet" href="css/registrar.css">
</head>
<body>

<div class="main">
        <div class="formulario">
            <form action="recibir_insertar_ayudante.php" method="GET">
                <h1>Registrarse</h1>
                <hr width="100%">
                <div class="parte">
                    <label> RUT </label>
                    <input placeholder="RUT..." id="rut" name="rut" type="text" required>
                </div>
                <div class="parte">
                    <label> Nombre </label>
                    <input placeholder="Nombre..." id="nombres_ayudante"  name="nombres_ayudante" type="text" value="" required>
                </div>
                <div class="parte">
                    <label> Apellido </label>
                    <input placeholder="Apellido..." id="apellidos_ayudante"  name="apellidos_ayudante" type="text" value="" required>
                </div>
                <div class="parte">
                    <label> Carrera </label>
                    <input placeholder="Carrera..." id="carrera_ayudante"  name="carrera_ayudante" type="text" value="" required>
                </div>
                <div class="parte">
                    <label> Direccion </label>
                    <input placeholder="Direccion..." id="direccion_ayudante"  name="direccion_ayudante" type="text" value="" required>
                </div>
                <div class="parte">
                    <label> Telefono </label>
                    <input placeholder="Telefono..." id="telefono_ayudante"  name="telefono_ayudante" type="text" value="" required>
                </div>
                <div class="parte">
                    <label> Correo </label>
                    <input placeholder="Correo..." id="correo_ayudante"  name="correo_ayudante" type="email" value="" required>
                </div>
                <div class="parte">
                    <label> Contraseña </label>
                    <input placeholder="Contraseña..." id="password_ayudante"  name="password_ayudante" type="password" value="" required>
                </div>
                <button type="submit"> Registrarse </button>
                <hr width="100%">
                <a  href="login_ayudante.php">Volver </a>
            </form>
        </div>
    </div>
</body>
</html>