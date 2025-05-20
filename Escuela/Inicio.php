<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <div>
       <?php
       echo "Bienvenido(a) ".$_SESSION["username"]." ". $_SESSION["lastname"]."<br>";
       echo "Primera línea<br>Segunda línea";

       ?>
    </div>
    
</body>
</html>