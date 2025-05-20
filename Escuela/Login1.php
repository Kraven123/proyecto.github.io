
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="formulario">
        <form action="" method="post">
            <h1>Inicio De Sesión</h1>
            <?php
            include("modelo/conexion.php");
            include("controlador/controlador_login.php")
            ?>
            <div class="username">
                <input type="text" id="usuario" name="usuario">
                <label for="Usuario">Ingrese su usuario</label>
            </div>
            <div class="username">
                <input type="password" id="password" name="password">
                <label for="">Ingrese su contraseña</label>
            </div>
            <div class="buttonEnviar">
                <input type="submit" name="btnIniciar"  value="Iniciar Sesión">
            </div>
        </form>
    </div>
</body>
</html>