<?php
require('cn.php');
require('vendor/autoload.php');

$consulta="SELECT * FROM `view_venta3 WHERE fecha BETWEEN '2023-01-01' AND '2023-12-31'";
$datos = $conn->query($consulta);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="ReporteV3.csv"');

$output = fopen('php://output', 'w');

// Escribir la línea de encabezado
fputcsv($output, array('Fecha', 'Total', 'Empleado', 'Telefono'));

// Escribir los datos de los empleados
while ($rows = $datos->fetch_assoc()) {
    fputcsv($output, array(
        $rows['fecha'],
        $rows['total'],
        $rows['nombre'],
        $rows['telefono'],
    ));
}

fclose($output);
exit;

    ?>