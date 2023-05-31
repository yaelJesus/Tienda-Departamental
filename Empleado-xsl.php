<?php
require('cn.php');

// Consulta SQL con JOIN
$consulta="SELECT * FROM empleado WHERE estatus = 1";

$resultado = $conn->query($consulta);

// Crear un objeto XMLWriter
$xml = new XMLWriter();
$xml->openURI('Empleado.xml');
$xml->startDocument('1.0', 'UTF-8');
$xml->setIndent(true);

// Inicio del elemento raíz
$xml->startElement('tabla');

// Recorrer los registros y generar los elementos XML
while ($row = $resultado->fetch_assoc()) {
    $xml->startElement('registro');

    $xml->writeElement('idEmpleado', $row['idEmpleado']);
    $xml->writeElement('nombre', $row['nombre']);
    $xml->writeElement('apPaterno', $row['apPaterno']);
    $xml->writeElement('apMaterno', $row['apMaterno']);
    $xml->writeElement('direccion', $row['direccion']);
    $xml->writeElement('rfc', $row['rfc']);
    $xml->writeElement('telefono', $row['telefono']);

    $xml->endElement(); // Fin del elemento registro
}

// Fin del elemento raíz
$xml->endElement();

$xml->endDocument();
$xml->flush();

// Cerrar la conexión a la base de datos
$conn->close();

header('Content-type: text/xml');
header('Content-Disposition: attachment; filename="Empleado.xml"');
readfile('Empleado.xml');
?>