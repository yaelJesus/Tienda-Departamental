<?php
    require_once('conecta.php');

    $id=$_POST["borrar"];
    $user=$_POST['user'];

    $sql = "UPDATE cliente SET estatus = 0 where idCliente=". $id;

    $resultado = mysqli_query($conexion,$sql);

    header("Location: cliente.php?user=$user"); 
    mysqli_close( $conexion );

?>