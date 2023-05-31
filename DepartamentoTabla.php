<?php
    require_once('conecta.php');
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $user = $_POST['user'];

    $fecha = date("Y-m-d");

    $consulta = "INSERT INTO departamento(nombre, descripcion, creo, fechaCreacion, modifico, fechaModificacion) VALUES ('".$nombre."','".$descripcion."','".$user."','".$fecha."','".$user."','".$fecha."')";

    $resultado = mysqli_query($conexion,$consulta);
    header("Location:Departamento.php?user=$user");
    mysqli_close( $conexion );
?>