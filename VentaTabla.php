<?php
    require_once('conecta.php');
    $fecha = $_POST['fecha'];
    $total = $_POST['total'];
    $empleado = $_POST['empleado'];
    $user = $_POST['user'];

    $fecha = date("Y-m-d");

    $consulta = "INSERT INTO venta(fecha, total, idEmpleado , creo, fechaCreacion, modifico, fechaModificacion) VALUES ('".$fecha."','".$total."','".$empleado."','".$user."','".$fecha."','".$user."','".$fecha."')";

    $resultado = mysqli_query($conexion,$consulta);
    header("Location:Venta.php?user=$user");
    mysqli_close( $conexion );
?>