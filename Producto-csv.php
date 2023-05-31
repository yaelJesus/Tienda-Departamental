<?php
require('cn.php');
require('vendor/autoload.php');
  
$consulta="SELECT
p.idProducto,
p.nombre AS Nombre,
c.nombre AS Cliente,
u.nombre AS Usuario,
p.stock,
p.precio,
p.descripcion
FROM
producto p
JOIN cliente c ON
p.idCliente = c.idCliente
JOIN usuario u ON 
p.idUsuario = u.idUsuario
WHERE
p.estatus = 1";
$datos = $conn->query($consulta);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="Producto.csv"');

$output = fopen('php://output', 'w');

// Escribir la línea de encabezado
fputcsv($output, array('Nombre', 'Cliente', 'Usuario', 'Stock', 'Precio', 'Descripcion'));

// Escribir los datos de los empleados
while ($rows = $datos->fetch_assoc()) {
    fputcsv($output, array(
        $rows['Nombre'],
        $rows['Cliente'],
        $rows['Usuario'],
        $rows['stock'],
        $rows['precio'],
        $rows['descripcion'],
    ));
}

fclose($output);
exit;

    ?>