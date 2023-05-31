<?php
// Datos de conexión a la base de datos
$host = "localhost";
$usuario = "root";
$password = "";
$baseDeDatos = "tiendadepartamental";

// Establecer conexión a la base de datos
$conexion = mysqli_connect($host, $usuario, $password, $baseDeDatos);

// Verificar si se produjo un error en la conexión
if (mysqli_connect_errno()) {
    echo "Error al conectar a la base de datos: " . mysqli_connect_error();
    exit();
}
?>