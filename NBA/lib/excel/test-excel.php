<?php

	include "PHPExcel.php";
	$document = new PHPExcel();
	$document->getActiveSheet()->setCellValue('A1', 'Titre');
	$document->getActiveSheet()->setCellValue('B1', 'Realisateur');
	$document->getActiveSheet()->setCellValue('C1', 'Annee');
	$ecrivain = PHPExcel_IOFactory::createWriter($document, "Excel2007");
	$ecrivain->save("test-excel.xlsx");
	if(file_exists("test-excel.xlsx"))
	{
		echo '<a href="test-excel.xlsx">T&eacute;l&eacute;charger le fichier Excel</a>';	
	}	
?>

