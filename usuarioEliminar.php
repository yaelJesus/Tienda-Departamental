<?php
    require_once('conecta.php');

    $id=$_POST["borrar"];
    $user=$_POST['user'];

    $sql = "UPDATE usuario SET estatus = 0 where idUsuario=". $id;

    $resultado = mysqli_query($conexion,$sql);

    header("Location: usuario.php?user=$user"); 
    mysqli_close( $conexion );

?>