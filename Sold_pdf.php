<?php 
	require_once "ezpdfclass/class/class.ezpdf.php";
	require_once "dbconn.php";
	$pdf = new Cezpdf('letter','portait');
	
	
	$stmt = $conn->prepare("SELECT * FROM reserve WHERE Rstatus= 'Sold'");
	$stmt->execute();
	
	$top = 700;
	$width = 20;
	
	$pdf->addText($width,$top,12,"Name");
	$width += 50;
	$pdf->addText($width+50,$top,12,"Reserve ID");
	$width += 60;
	$pdf->addText($width+60,$top,12,"Sub Name");
	$width += 100;
	$pdf->addText($width+120,$top,12,"Total Monthly Amortization");
	
	while($rs = $stmt->fetch()){
		$top -= 12;
		$width = 20;
		$pdf->addText($width,$top,12,$rs['buyer']);
		$width += 50;
		$pdf->addText($width+50,$top,12,$rs['reserveid']);
		$width += 60;
		$pdf->addText($width+60,$top,12,$rs['subname']);
		$width += 100;
		$pdf->addText($width+120,$top,12,$rs['total_amort']);
		
	}
	$pdf->ezStream();
	
	exit();
?>