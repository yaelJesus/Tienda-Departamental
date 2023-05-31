<?php
    require_once('conecta.php');

    $id=$_POST["borrar"];
    $user=$_POST['user'];

    $sql = "UPDATE producto SET estatus = 0 where idProducto=". $id;

    $resultado = mysqli_query($conexion,$sql);

    header("Location: Producto.php?user=$user"); 
    mysqli_close( $conexion );

?>