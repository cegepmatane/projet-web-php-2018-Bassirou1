<?php 

require('../accesseur/EquipeDAO.php');
$dao = new EquipeDAO();
$listeEquipe = $dao->lireListe();

require('../lib/excel/PHPExcel.php');
$document = new PHPExcel();
$document->getActiveSheet()->setCellValue('A1', 'Nom');
$document->getActiveSheet()->setCellValue('B1', 'Creation');
$document->getActiveSheet()->setCellValue('C1', 'Resume');

$rangee = 2;
foreach($listeEquipe as $equipe)
{
	$document->getActiveSheet()->setCellValue('A'.$rangee, $equipe->nom);
	$document->getActiveSheet()->setCellValue('B'.$rangee, $equipe->creation);
	$document->getActiveSheet()->setCellValue('C'.$rangee, $equipe->resume);	
	$rangee++;
}



//Creation du fichier sur le disque
$ecrivain = PHPExcel_IOFactory::createWriter($document, "Excel2007"); 
$ecrivain->save("excel/liste-equipe.xlsx");
if(file_exists("excel/liste-equipe.xlsx"))
{
	echo '<a href="excel/liste-equipe.xlsx">T&eacute;l&eacute;charger la liste sous format Excel</a>';	
}
