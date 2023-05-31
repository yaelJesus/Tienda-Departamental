<?php
require('cn.php');
require('vendor/autoload.php');
  
$consulta="SELECT
v.idVenta,
v.fecha,
v.total,
e.nombre
FROM
venta v
JOIN empleado e ON
v.idEmpleado = e.idEmpleado
WHERE
v.estatus = 1";
$datos = $conn->query($consulta);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="Venta.csv"');

$output = fopen('php://output', 'w');

// Escribir la línea de encabezado
fputcsv($output, array('Fecha', 'Total', 'Empleado'));

// Escribir los datos de los empleados
while ($rows = $datos->fetch_assoc()) {
    fputcsv($output, array(
        $rows['fecha'],
        $rows['total'],
        $rows['nombre'],
    ));
}

fclose($output);
exit;

    ?>