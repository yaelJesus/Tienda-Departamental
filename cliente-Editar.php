<?php
    require_once('conecta.php');
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['aPaterno'];
    $materno = $_POST['aMaterno'];
    $direccion = $_POST['direccion'];
    $tel = $_POST['tel'];
    $user = $_POST['user'];

    $fecha = date("Y-m-d");
    
    $sql = "UPDATE cliente SET nombre='$nombre', apPaterno='$paterno', apMaterno='$materno', direccion='$direccion', telefono='$tel', modifico = '$user', fechaModificacion	= '$fecha' WHERE idCliente=". $id;
    
    $resultado = mysqli_query($conexion,$sql);

    header("Location: cliente.php?user=$user"); 
    mysqli_close( $conexion );
?>