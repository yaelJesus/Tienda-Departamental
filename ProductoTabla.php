<?php
    require_once('conecta.php');
    $nombre = $_POST['nombre'];
    $cliente = $_POST['cliente'];
    $usuario = $_POST['usuario'];
    $stock = $_POST['stock'];
    $precio = $_POST['precio'];
    $desc = $_POST['desc'];
    $user = $_POST['user'];

    $fecha = date("Y-m-d");

    $consulta = "INSERT INTO producto(nombre, idCliente, idUsuario, stock, precio, descripcion, creo, fechaCreacion, modifico, fechaModificacion) VALUES ('".$nombre."','".$cliente."','".$usuario."','".$stock."','".$precio."','".$desc."','".$user."','".$fecha."','".$user."','".$fecha."')";

    $resultado = mysqli_query($conexion,$consulta);
    header("Location:Producto.php?user=$user");
    mysqli_close( $conexion );
?>