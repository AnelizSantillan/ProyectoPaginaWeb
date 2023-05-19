<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php

    $servername = "localhost";
    $database = "personas";
    $username = "aneliz";
    $password = "123";

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $conexion = mysqli_connect($servername,$username,$password,$database);
    $sql = "INSERT INTO datos (nombre, correo) values ('$nombre','$correo')";

    if(mysqli_query($conexion, $sql)){
        echo"Registro completado";
    }
    ?>
    <br>
    <button><a href="./index.html">Regresar</a></button>
</body>
</html>