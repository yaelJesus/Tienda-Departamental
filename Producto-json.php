<?php
require('cn.php');

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
header('Content-Disposition: attachment; filename="Producto.json"');

// Imprimir el contenido JSON
echo $jsonData;

// Cerrar la conexión a la base de datos
$conn->close();
?>