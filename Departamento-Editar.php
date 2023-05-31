<?php
    require_once('conecta.php');
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $user = $_POST['user'];

    $fecha = date("Y-m-d");
    
    $sql = "UPDATE departamento SET nombre='$nombre', descripcion='$descripcion', modifico='$user', fechaModificacion='$fecha' WHERE idDepartamento =". $id;
    
    $resultado = mysqli_query($conexion,$sql);

    header("Location: Departamento.php?user=$user"); 
    mysqli_close( $conexion );
?>