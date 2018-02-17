<?php
	//print_r($_POST);
	$nom = $_POST["nom"];
	$creation = $_POST["creation"];
	$resume =$_POST["resume"];
	$SQL_AJOUTER_EQUIPE = "INSERT into equipe(nom,creation,resume) VALUES('".$nom."','".$creation."','".$resume."')";
	//echo $SQL_AJOUTER_EQUIPE;

	require_once "basededonnes.php";
	$requeteAjouterEquipe = $basededonnees->prepare($SQL_AJOUTER_EQUIPE);
	$requeteAjouterEquipe->execute();

?>