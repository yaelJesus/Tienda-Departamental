<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
include('conecta.php');

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores ingresados por el usuario
    $nombreUsuario = $_POST["nombreUsuario"];
    $contrasena = $_POST["contrasena"];

    // Consulta para buscar al usuario en la tabla
    $consulta = "SELECT * FROM usuario WHERE email = '$nombreUsuario'";

    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $consulta);

    // Verificar si se encontró algún registro
    if (mysqli_num_rows($resultado) > 0) {
        // Obtener los datos del usuario
        $fila = mysqli_fetch_assoc($resultado);
        $contrasenaHash = $fila["clave"]; // Suponiendo que la contraseña se guarda en la tabla como un hash

        // Verificar la contraseña ingresada
        if (password_verify($contrasena, $contrasenaHash)) {
            // Contraseña correcta, el inicio de sesión es exitoso
            header("Location:home.php?user=".$fila['nombre']);
        } else {
            // Contraseña incorrecta
            header("Location:login.html");
        }
    } else {
        // No se encontró al usuario en la tabla
        header("Location:login.html");
    }

    // Liberar el resultado de la consulta
    mysqli_free_result($resultado);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
</body>
</html>