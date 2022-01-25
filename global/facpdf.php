<?php
    require('librerias/fpdf/fpdf.php');


    class PDF extends FPDF
    {
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('logo/pipegrow.png',10,5,30);
        // Arial bold 15
        $this->SetFont('Arial','B',25);
        // Movernos a la derecha
        $this->Cell(63);
        // Título
        $this->SetTextColor(48, 105, 101);
        $this->cell(63,10,"PipeGrow", 0,1,'C', 0);
        $this->Cell(77);
        $this->Cell(63,10,'Factura','C');
        // Salto de línea
        $this->Ln(25);

    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10, utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }
    }


    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();

    $total=0;

    $pdf->SetFont('Arial','B',19);
    $pdf->SetTextColor(48, 105, 101);
    $pdf->cell(83, 10, "Pedido #".$idventa." (".$fechahora.")", 0,1,'', 0);
    $pdf->Ln(5);

    $pdf->SetTextColor(0, 0, 0);
        $pdf->SetFont('Arial','B',18);
        $pdf->cell(83, 10, "Producto", 1,0,'C', 0);
        $pdf->cell(43, 10, "Cantidad", 1,0,'C', 0);
        $pdf->cell(63, 10, "Precio", 1,1,'C', 0);
    
    $pdf->SetFont('Arial','',16);


    foreach($_SESSION['carrito'] as $indice=>$product){

        $total=$total + ( $product['precio'] * $product['cantidad']);

        $pdf->cell(83, 10, $product['nombre'], 1,0,'C', 0);
        $pdf->cell(43, 10, $product['cantidad'], 1,0,'C', 0);
        $pdf->cell(63, 10, number_format( $product['precio'] * $product['cantidad'],3), 1,1,'C', 0);

    }

        $pdf->SetFont('Arial','B',18);
        $pdf->cell(126, 10, "    Subtotal:", 1,0,'', 0);
        $pdf->SetFont('Arial','',16);
        $pdf->cell(63, 10, "$". number_format($total,3), 1,1,'C', 0);
        $pdf->SetFont('Arial','B',18);
        $pdf->cell(126, 10, "    Total:", 1,0,'', 0);
        $pdf->SetFont('Arial','',16);
        $pdf->cell(63, 10, "$". number_format($total,3), 1,1,'C', 0);
        $pdf->Ln(5);

        $pdf->SetFont('Arial','B',19);
        $pdf->SetTextColor(48, 105, 101);
        $pdf->cell(83, 10, utf8_decode("Dirección De Facturacion"), 0,1,'', 0);

        $pdf->SetFont('Arial','',16);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->cell(83, 10, utf8_decode("- ".$nombres."."), 0,1,'', 0);
        $pdf->cell(83, 10, utf8_decode("- ".$direccion.","), 0,1,'', 0);
        $pdf->cell(83, 10, utf8_decode("  ".$direccion2.","), 0,1,'', 0);
        $pdf->cell(83, 10, utf8_decode("  ".$adicionales.","), 0,1,'', 0);
        $pdf->cell(83, 10, utf8_decode("  ".$ciudad."."), 0,1,'', 0);
        $pdf->cell(83, 10, utf8_decode("- ".$postal."."), 0,1,'', 0);
        $pdf->cell(83, 10, utf8_decode("- ".$telefono."."), 0,1,'', 0);
        $pdf->cell(83, 10, utf8_decode("- ".$correo."."), 0,1,'', 0);



    //$pdf->Output();
    $pdf->Output('f','facturas/'.$idventa.'.pdf');
    
?>