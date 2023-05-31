<?php
    require_once('conecta.php');
    $nombre = $_POST['nombre'];
    $paterno = $_POST['aPaterno'];
    $materno = $_POST['aMaterno'];
    $direccion = $_POST['direccion'];
    $tel = $_POST['tel'];
    $user = $_POST['user'];

    $fecha = date("Y-m-d");

    $consulta = "INSERT INTO cliente (nombre,apPaterno,apMaterno,direccion,telefono,creo,fechaCreacion,modifico,fechaModificacion) VALUES ('".$nombre."','".$paterno."','".$materno."','".$direccion."','".$tel."','".$user."','".$fecha."','".$user."','".$fecha."')";

    $resultado = mysqli_query($conexion,$consulta);
    header("Location:cliente.php?user=$user");
    mysqli_close( $conexion );
?>