<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	
    // Arial bold 15
    $this->SetFont('Arial','B',9.5);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
   $this->Cell(70,10,' ',0,0,'C');
    // Salto de línea
    $this->Ln(20);

	$this->Cell(50,10,'Fecha',1,0,'C',0);
	$this->Cell(50,10,'Total',1,0,'C',0);
	$this->Cell(50,10,'Empleado',1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
}
}

require ("cn.php");
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
$resultado = mysqli_query($conn, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);

while ($row=$resultado->fetch_assoc()) {
	$pdf->Cell(50,10,$row['fecha'],1,0,'C',0);
	$pdf->Cell(50,10,$row['total'],1,0,'C',0);
    $pdf->Cell(50,10,$row['nombre'],1,1,'C',0);
} 

$pdf->Output('Venta.pdf', 'I');
?>
