<link rel="stylesheet" href="style2.css">
<?php
session_start();
if (!empty($_POST["btnIniciar"])) {
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $sql= $conexion->query("select * from usuarios where correo ='$usuario' and contraseña='$password' ");
        if ($datos = $sql->fetch_object()) {
            $_SESSION["id"] = $datos->id;
            $_SESSION["username"] = $datos->Nombre;
            $_SESSION["lastname"] = $datos->Apellido;
            
            header("location: inicio.php");
        } else {
            echo "<div class = denegado>Acceso denegado</div>";
        }
        
    } else {
        echo "campos vacíos";
    }
}
?>
