<?php 

$idEquipe = filter_var($_GET['equipe'], FILTER_VALIDATE_INT);

require('../accesseur/EquipeDAO.php');
$dao = new EquipeDAO();

$equipe = $dao->lireEquipe($idEquipe);
//print_r($equipe);

require('../lib/fpdf/fpdf.php');

$document = new FPDF();
$document->AddPage();
$document->SetFont('Arial','B',16);
$document->Write(10, 'Equipe ' . $equipe['nom']);
$document->Ln();
$document->Ln();
$document->Write(10, 'Equipe' . utf8_decode($equipe['resume']));
$document->Ln();
 
$document->Output();