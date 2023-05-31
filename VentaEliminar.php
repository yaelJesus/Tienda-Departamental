<?php
    require_once('conecta.php');

    $id=$_POST["borrar"];
    $user=$_POST['user'];

    $sql = "UPDATE venta SET estatus = 0 where idVenta=". $id;

    $resultado = mysqli_query($conexion,$sql);

    header("Location: Venta.php?user=$user"); 
    mysqli_close( $conexion );

?>