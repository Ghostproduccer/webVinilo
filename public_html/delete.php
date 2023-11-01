<?php
// Obtener el ID del usuario a eliminar
$id = $_GET["id"];

// Eliminar el registro de la base de datos
include "conexionVinylo.php";

$consulta = "DELETE FROM users WHERE iduser = $id";

if (mysqli_query($conn, $consulta)) {
    header("location: admin.php");
    exit();
}
else {
    echo 'no se elimino correctamente';
}
mysqli_close($conn);

// Redirigir al usuario de vuelta a admin.php después de unos segundos
header("refresh:2;url=admin.php");
?>