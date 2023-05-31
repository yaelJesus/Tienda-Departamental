<?php
    require_once('conecta.php');

    $id=$_POST["borrar"];
    $user=$_POST['user'];

    $sql = "UPDATE departamento SET estatus = 0 where idDepartamento=". $id;

    $resultado = mysqli_query($conexion,$sql);

    header("Location: Departamento.php?user=$user"); 
    mysqli_close( $conexion );

?>