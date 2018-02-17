<?php
if(!empty($_POST['action-modifier-equipe']))
{
	//echo "action-modifier-equipe";
	//print_r($_POST);
	
	$nom = $_POST["nom"];
	$creation = $_POST["creation"];
	$resume = $_POST["resume"];
	$id = $_POST["id"];
	
	$SQL_MODIFIER_EQUIPE = "UPDATE equipe SET nom = '".$nom."', creation = '".$creation."', resume = '".$resume."' WHERE idEquipe = ".$id;
	//echo $SQL_MODIFIER_EQUIPE;
	
	require_once "basededonnes.php";
	
	$requeteModifierEquipe = $basededonnees->prepare($SQL_MODIFIER_EQUIPE);
	$requeteModifierEquipe->execute();
}

?>