<?php
    require_once('conecta.php');
    $id = $_POST['id'];
    $name = $_POST["nombre"];
    $lname = $_POST["aPaterno"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $user = $_POST['user'];

    $fullname = $name.' '.$lname;
    $fecha = date("Y-m-d");
    $contrasenaHash = password_hash($pass, PASSWORD_DEFAULT);
    
    $sql = "UPDATE usuario SET nombre='$fullname', email='$email', clave='$contrasenaHash', modifico = '$user', fechaModificacion= '$fecha' WHERE idUsuario=". $id;
    
    $resultado = mysqli_query($conexion,$sql);

    header("Location: usuario.php?user=$user"); 
    mysqli_close( $conexion );
?>