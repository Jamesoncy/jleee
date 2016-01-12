<?php 
	require_once "ezpdfclass/class/class.ezpdf.php";
	require_once "dbconn.php";
	$pdf = new Cezpdf('letter','portait');
	
	
	$stmt = $conn->prepare("SELECT * FROM lot WHERE lotstatus= 'Temporarily Reserved'");
	$stmt->execute();
	
	$top = 700;
	$width = 20;
	
	$pdf->addText($width,$top,12,"Lot ID");
	$width += 50;
	$pdf->addText($width+50,$top,12,"Sub. Name");
	$width += 60;
	$pdf->addText($width+60,$top,12,"Phase");
	$width += 100;
	$pdf->addText($width+50,$top,12,"Block");
	$width += 50;
	$pdf->addText($width+50,$top,12,"Lot No.");
	$width += 50;
	$pdf->addText($width+120,$top,12,"Price");

	
	while($rs = $stmt->fetch()){
		$top -= 12;
		$width = 20;
		$pdf->addText($width,$top,12,$rs['lot_id']);
		$width += 50;
		$pdf->addText($width+50,$top,12,$rs['subdname']);
		$width += 60;
		$pdf->addText($width+60,$top,12,$rs['phase']);
		$width += 100;
		$pdf->addText($width+120,$top,12,$rs['block']);
		$width += 50;
		$pdf->addText($width,$top,12,$rs['lotno']);
		$width += 50;
		$pdf->addText($width+120,$top,12,$rs['price']);
		$width += 50;
	}
	$pdf->ezStream();
	
	exit();
?>