<?php

$nom = $_REQUEST["nombre"];
$ape = $_REQUEST["apellidos"];
$user3 = $_REQUEST["usuario"];
$pass = $_REQUEST["contrasena"];
$mail = $_REQUEST["email"];

include "conexionVinylo.php";

//consulta de insercción
$sql = " insert into users (`username`, `password`, `nombre`, `apellidos`, `email`) values ('{$user3}', '{$pass}', '{$nom}', '{$ape}', '{$mail}'); ";


if (mysqli_query($conn, $sql)) {
    header('Location: iniciosesion.php?mensaje=¡Registro exitoso!');
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3><?= $mensaje ?></h3>
</body>

</html>