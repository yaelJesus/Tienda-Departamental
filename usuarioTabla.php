<?php

include('conecta.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nombre"];
    $lname = $_POST["aPaterno"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $user = $_POST['user'];

    $fullname = $name.' '.$lname;
    $fecha = date("Y-m-d");

    $consulta = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        header('Location: "usuarioAdd.php?user='.$user.'"');
    } else {
        $contrasenaHash = password_hash($pass, PASSWORD_DEFAULT);

        $insercion = "INSERT INTO usuarios (nombre, email, clave, creo, fechaCreacion, modifico, fechaModificacion) VALUES ('$fullname' ,'$email', '$contrasenaHash', '$fullname' ,'$fecha', '$fullname', '$fecha')";
        if (mysqli_query($conexion, $insercion)) {
           header('Location: "usuario.php?user='.$user.'"');
        } else {
            echo "Error al registrar el usuario: " . mysqli_error($conexion);
        }
    }

    mysqli_free_result($resultado);
}

mysqli_close($conexion);
?>