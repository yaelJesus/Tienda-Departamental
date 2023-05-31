<?php
require('cn.php');

// Consulta SQL con JOIN
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

// Crear un objeto XMLWriter
$xml = new XMLWriter();
$xml->openURI('Venta.xml');
$xml->startDocument('1.0', 'UTF-8');
$xml->setIndent(true);

// Inicio del elemento raíz
$xml->startElement('tabla');

// Recorrer los registros y generar los elementos XML
while ($row = $resultado->fetch_assoc()) {
    $xml->startElement('registro');

    $xml->writeElement('idVenta', $row['idVenta']);
    $xml->writeElement('Fecha', $row['fecha']);
    $xml->writeElement('Total', $row['total']);
    $xml->writeElement('Empleado', $row['nombre']);

    $xml->endElement(); // Fin del elemento registro
}

// Fin del elemento raíz
$xml->endElement();

$xml->endDocument();
$xml->flush();

// Cerrar la conexión a la base de datos
$conn->close();

header('Content-type: text/xml');
header('Content-Disposition: attachment; filename="Venta.xml"');
readfile('Venta.xml');
?>