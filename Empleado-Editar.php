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
    
    $sql = "UPDATE empleado SET empleado SET nombre='$nombre',apPaterno='$paterno',apMaterno='$materno',direccion='$direccion',rfc='$rfc',telefono=$tel', modifico = '$user', fechaModificacion= '$fecha' WHERE idEmpleado =". $id;
    
    $resultado = mysqli_query($conexion,$sql);

    header("Location: Empleado.php?user=$user"); 
    mysqli_close( $conexion );
?>