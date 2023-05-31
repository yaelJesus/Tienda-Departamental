<?php
require('cn.php');
require('vendor/autoload.php');
  
$consulta="SELECT * FROM departamento WHERE estatus = 1";
$datos = $conn->query($consulta);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="Departamento.csv"');

$output = fopen('php://output', 'w');

// Escribir la línea de encabezado
fputcsv($output, array('Nombre', 'Direccion'));

// Escribir los datos de los empleados
while ($rows = $datos->fetch_assoc()) {
    fputcsv($output, array(
        $rows['nombre'],
        $rows['descripcion'],
    ));
}

fclose($output);
exit;

    ?>