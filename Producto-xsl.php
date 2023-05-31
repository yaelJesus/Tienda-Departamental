<?php
require('cn.php');

// Consulta SQL con JOIN
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

// Crear un objeto XMLWriter
$xml = new XMLWriter();
$xml->openURI('Producto.xml');
$xml->startDocument('1.0', 'UTF-8');
$xml->setIndent(true);

// Inicio del elemento raíz
$xml->startElement('tabla');

// Recorrer los registros y generar los elementos XML
while ($row = $resultado->fetch_assoc()) {
    $xml->startElement('registro');

    $xml->writeElement('idProducto', $row['idProducto']);
    $xml->writeElement('Nombre', $row['Nombre']);
    $xml->writeElement('Cliente', $row['Cliente']);
    $xml->writeElement('Usuario', $row['Usuario']);
    $xml->writeElement('stock', $row['stock']);
    $xml->writeElement('precio', $row['precio']);
    $xml->writeElement('descripcion', $row['descripcion']);

    $xml->endElement(); // Fin del elemento registro
}

// Fin del elemento raíz
$xml->endElement();

$xml->endDocument();
$xml->flush();

// Cerrar la conexión a la base de datos
$conn->close();

header('Content-type: text/xml');
header('Content-Disposition: attachment; filename="Producto.xml"');
readfile('Producto.xml');
?>