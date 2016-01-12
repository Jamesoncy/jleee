<?php 
	require_once "ezpdfclass/class/class.ezpdf.php";
	require_once "dbconn.php";
	$pdf = new Cezpdf('letter','portait');
	
	
	$stmt = $conn->prepare("SELECT * FROM reserve WHERE Rstatus= 'Reserved'");
	$stmt->execute();
	
	$top = 700;
	$width = 20;
	
	$pdf->addText($width,$top,12,"Name");
	$width += 50;
	
	$pdf->addText($width,$top,12,"Price");
	$width += 50;
	$pdf->addText($width,$top,12,"Terms");
	$width += 50;
	$pdf->addText($width,$top,12,"Downpayment");
	$width += 50;

	$pdf->addText($width+50,$top,12,"Cost Price");
	$width += 50;
	$pdf->addText($width+60,$top,12,"Monthly Amortization");
	$width += 50;
	$pdf->addText($width+130,$top,12,"Date");
	
	while($rs = $stmt->fetch()){
		$top -= 12;
		$width = 20;
		$pdf->addText($width,$top,12,$rs['buyer']);
		$width += 50;	
		$pdf->addText($width,$top,12,$rs['price']);
		$width += 50;
		$pdf->addText($width,$top,12,$rs['terms']);
		$width +=50;
		$pdf->addText($width,$top,12,$rs['downpayment']);
		$width += 50;

		$pdf->addText($width+50,$top,12,$rs['costprice']);
		$width += 50;
		$pdf->addText($width+60,$top,12,$rs['total_amort']);
		$width += 50;
		$pdf->addText($width+130,$top,12,$rs['date']);
		
		
	}
	$pdf->ezStream();
	
	exit();
?>