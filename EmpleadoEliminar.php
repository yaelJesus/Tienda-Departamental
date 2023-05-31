<?php
    require_once('conecta.php');

    $id=$_POST["borrar"];
    $user=$_POST['user'];

    $sql = "UPDATE mpleado SET estatus = 0 where idEmpleado=". $id;

    $resultado = mysqli_query($conexion,$sql);

    header("Location: Empleado.php?user=$user"); 
    mysqli_close( $conexion );

?>