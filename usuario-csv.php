<?php
require('cn.php');
require('vendor/autoload.php');
  
$consulta="SELECT * FROM usuario WHERE estatus = 1";
$datos = $conn->query($consulta);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="Usuario.csv"');

$output = fopen('php://output', 'w');

// Escribir la línea de encabezado
fputcsv($output, array('Nombre', 'Email'));

// Escribir los datos de los empleados
while ($rows = $datos->fetch_assoc()) {
    fputcsv($output, array(
        $rows['nombre'],
        $rows['email'],
    ));
}

fclose($output);
exit;

    ?>