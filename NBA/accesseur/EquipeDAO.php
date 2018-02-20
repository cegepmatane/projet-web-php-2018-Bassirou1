<?php 
	include "basededonnes.php";	
	class EquipeDAO
	{		
		
		function lireListe()
		{
			global $basededonnees;
			$requeteListeEquipe = $basededonnees->prepare("SELECT * FROM equipe");
			$requeteListeEquipe->execute();
			$listeEquipe = $requeteListeEquipe->fetchAll();
			return $listeEquipe;
		}
		
		function lireEquipe($id)
		{
			global $basededonnees;
	
			$LIRE_EQUIPE = "SELECT * FROM equipe WHERE idEquipe = $id";
			echo $LIRE_EQUIPE;
			
			$requeteLireEquipe = $basededonnees->prepare($LIRE_EQUIPE);
			$requeteLireEquipe->execute();
			$equipe = $requeteLireEquipe->fetch();
			
			//print_r($equipe);
			//var_dump($equipe);	
			
			return $equipe;
		}
		
		function ajouterEquipe($equipe)
		{
			global $basededonnees;
			//print_r($_POST);
			$nom = $_POST["nom"];
			$creation = $_POST["creation"];
			$resume =$_POST["resume"];
			$SQL_AJOUTER_EQUIPE = "INSERT into equipe(nom,creation,resume) VALUES('".$nom."','".$creation."','".$resume."')";
			//echo $SQL_AJOUTER_EQUIPE;
			$requeteAjouterEquipe = $basededonnees->prepare($SQL_AJOUTER_EQUIPE);
			$requeteAjouterEquipe->execute();
		}
		
		function modifierEquipe($equipe)
		{
			global $basededonnees;
			$nom = $_POST["nom"];
			$creation = $_POST["creation"];
			$resume = $_POST["resume"];
			$id = $_POST["id"];
	
			$SQL_MODIFIER_EQUIPE = "UPDATE equipe SET nom = '".$nom."', creation = '".$creation."', resume = '".$resume."' WHERE idEquipe = ".$id;
			//echo $SQL_MODIFIER_EQUIPE;
			$requeteModifierEquipe = $basededonnees->prepare($SQL_MODIFIER_EQUIPE);
			$requeteModifierEquipe->execute();
			
		}
		function effacerEquipe($id)
		{
			global $basededonnees;
			$SQL_EFFACER_EQUIPE = "DELETE FROM equipe WHERE idEquipe = " . $_POST['id'];
 			//echo $SQL_EFFACER_EQUIPE;
			$requeteEffacerEquipe= $basededonnees->prepare($SQL_EFFACER_EQUIPE);
 			$requeteEffacerEquipe->execute();
			
		}
	}

?>