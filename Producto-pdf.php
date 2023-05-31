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

	$this->Cell(30,10,'Nombre',1,0,'C',0);
	$this->Cell(30,10,'Cliente',1,0,'C',0);
	$this->Cell(30,10,'Usuario',1,0,'C',0);
	$this->Cell(25,10,'Stock',1,0,'C',0);
	$this->Cell(25,10,'Precio',1,0,'C',0);
    $this->Cell(50,10,'Descripcion',1,1,'C',0);
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
$resultado = mysqli_query($conn, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);

while ($row=$resultado->fetch_assoc()) {
	$pdf->Cell(30,10,$row['Nombre'],1,0,'C',0);
	$pdf->Cell(30,10,$row['Cliente'],1,0,'C',0);
	$pdf->Cell(30,10,$row['Usuario'],1,0,'C',0);
	$pdf->Cell(25,10,$row['stock'],1,0,'C',0);
	$pdf->Cell(25,10,$row['precio'],1,0,'C',0);
    $pdf->Cell(50,10,$row['descripcion'],1,1,'C',0);
} 

$pdf->Output('Producto.pdf', 'I');
?>
