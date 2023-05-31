<?php
require('cn.php');
require('vendor/autoload.php');
 
$consulta="SELECT * FROM Cliente WHERE estatus = 1";
$datos = $conn->query($consulta);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="Cliente.csv"');

$output = fopen('php://output', 'w');

// Escribir la línea de encabezado
fputcsv($output, array('Nombre', 'Apellido Paterno', 'Apellido Materno', 'Direccion', 'Telefono'));

// Escribir los datos de los empleados
while ($rows = $datos->fetch_assoc()) {
    fputcsv($output, array(
        $rows['nombre'],
        $rows['apPaterno'],
        $rows['apMaterno'],
        $rows['direccion'],
        $rows['telefono']
    ));
}

fclose($output);
exit;

    ?>