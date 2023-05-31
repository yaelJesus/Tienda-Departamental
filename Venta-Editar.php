<?php
    require_once('conecta.php');
    $id = $_POST['id'];
    $fecha = $_POST['fecha'];
    $total = $_POST['total'];
    $empleado = $_POST['empleado'];
    $user = $_POST['user'];

    $fecha = date("Y-m-d");
    
    $sql = "UPDATE venta SET fecha='$fecha', total='$total', idEmpleado='$empleado', modifico = '$user', fechaModificacion= '$fecha' WHERE idReporteDeIncidentes=". $id;
    
    $resultado = mysqli_query($conexion,$sql);

    header("Location: Venta.php?user=$user"); 
    mysqli_close( $conexion );
?>