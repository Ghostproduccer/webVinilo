<?php

include "conexionVinylo.php";

  $username2 = $_REQUEST["user"];
  $password2 = $_REQUEST["password"];

  // Consultar la base de datos para buscar un usuario con el nombre de usuario y la contraseña proporcionados
  $sql = "SELECT * FROM id19706168_tiendavinylo.users WHERE users.username='$username2' AND users.password='$password2'";
  $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // Los credenciales son correctos
        if ($username2 == 'admin') {
        // Redirigir a la página de administración de usuarios
            header("Location: admin.php");
            exit();
        } else {
        // Redirigir a la página de bienvenida
            header("Location: pedido_login.php?user=$username2");
            exit();
            }
    } else {
    // Los credenciales son incorrectos
        header("Location: iniciosesion.php?error=Usuario o contraseña incorrectos.");
        }

  mysqli_close($conn);

?>
