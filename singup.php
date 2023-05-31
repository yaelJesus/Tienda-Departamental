<?php

include('conecta.php');

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores ingresados por el usuario
    $name = $_POST["name"];
    $lname = $_POST["lastname"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $fullname = $name.' '.$lname;
    $fecha = date("Y-m-d");

    // Verificar si el usuario ya existe en la tabla
    $consulta = "SELECT * FROM usuario WHERE email = '$username'";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        // El usuario ya existe
        header('Location: sing-up.php?Exist=Este usuario ya está registrado.');
    } else {
        // El usuario no existe, se puede agregar a la tabla
        // Aquí también se puede aplicar lógica adicional, como validar la fortaleza de la contraseña o sanitizar los datos antes de almacenarlos en la base de datos.

        // Hash de la contraseña (opcional)
        $contrasenaHash = password_hash($password, PASSWORD_DEFAULT);

        // Insertar el nuevo usuario en la tabla
        $insercion = "INSERT INTO usuario (nombre, email, clave, creo, fechaCreacion, modifico, fechaModificacion) VALUES ('$fullname' ,'$username', '$contrasenaHash', '$fullname' ,'$fecha', '$fullname', '$fecha')";
        if (mysqli_query($conexion, $insercion)) {
           header('Location: login.html');
        } else {
            echo "Error al registrar el usuario: " . mysqli_error($conexion);
        }
    }

    // Liberar el resultado de la consulta
    mysqli_free_result($resultado);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>