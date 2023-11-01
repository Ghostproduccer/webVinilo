<?php 
$id = $_GET["id"];
$nom = $_REQUEST["nombre"];
$ape = $_REQUEST["apellidos"];
$user3 = $_REQUEST["usuario"];
$pass = $_REQUEST["contrasena"];
$mail = $_REQUEST["email"];

include "conexionVinylo.php";

$sql = "UPDATE `users` 
        SET `username` = '$user3',
        `password` = '$pass',
        `nombre` = '$nom',
        `apellidos` = '$ape',
        `email` = '$mail'
        WHERE users.iduser = '$id';";



if (mysqli_query($conn, $sql)) {
    header('Location: admin.php');
}
else {
    echo "Error: ".mysqli_error($conn);
}

mysqli_close($conn);
