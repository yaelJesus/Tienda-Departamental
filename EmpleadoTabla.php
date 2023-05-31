<?php
    require_once('conecta.php');
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $direccion = $_POST['direccion'];
    $rfc = $_POST['rfc'];
    $tel = $_POST['tel'];
    $user = $_POST['user'];

    $fecha = date("Y-m-d");

    $consulta = "INSERT INTO empleado(nombre, apPaterno, apMaterno, direccion, rfc, telefono, creo, fechaCreacion, modifico, fechaModificacion) VALUES ('".$nombre."','".$paterno."','".$materno."','".$direccion."','".$rfc."','".$tel."','".$user."','".$fecha."','".$user."','".$fecha."')";

    $resultado = mysqli_query($conexion,$consulta);
    header("Location:Empleado.php?user=$user");
    mysqli_close( $conexion );
?>