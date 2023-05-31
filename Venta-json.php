<?php
require('cn.php');

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

$resultado = $conn->query($consulta);

// Obtener los datos de la consulta como un array
$cliente = array();
while ($row = $resultado->fetch_assoc()) {
    $cliente[] = $row;
}

// Generar el archivo JSON
$jsonData = json_encode($cliente, JSON_PRETTY_PRINT);

// Establecer los encabezados de la respuesta HTTP
header('Content-Type: application/json');
header('Content-Disposition: attachment; filename="Venta.json"');

// Imprimir el contenido JSON
echo $jsonData;

// Cerrar la conexión a la base de datos
$conn->close();
?>