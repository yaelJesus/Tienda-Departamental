<?php
    require_once('conecta.php');
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $cliente = $_POST['cliente'];
    $usuario = $_POST['usuario'];
    $stock = $_POST['stock'];
    $precio = $_POST['precio'];
    $desc = $_POST['desc'];
    $user = $_POST['user'];

    $fecha = date("Y-m-d");
    
    $sql = "UPDATE registroact SET nombre='$nombre', idCliente='$cliente', idUsuario='$usuario', stock='$stock', precio='$precio', descripcion='$desc', modifico = '$user', fechaModificacion= '$fecha' WHERE idRegistroAct=". $id;
    
    $resultado = mysqli_query($conexion,$sql);

    header("Location: Producto.php?user=$user"); 
    mysqli_close( $conexion );
?>