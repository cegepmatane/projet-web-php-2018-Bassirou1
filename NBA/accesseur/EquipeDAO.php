<?php 

	include"basededonnees.php";	
	class EquipeDAO
	{		
		
		function lireListe()
		{
			global $basededonnees;
			$requeteListeEquipe = $basededonnees->prepare("SELECT * FROM equipe");
			$requeteListeEquipe->execute();
			$listeEquipe = $requeteListeEquipe->fetchAll(PDO::FETCH_OBJ);
			return $listeEquipe;
		}
			
		function rechercherEquipe($terme)
		{
			global $basededonnees;
			$requeteListeEquipe = $basededonnees->prepare("SELECT * FROM equipe WHERE nom LIKE '%$terme%' OR resume LIKE '%$terme%' OR creation LIKE '%$terme%';");
			$requeteListeEquipe->execute();
			$listeEquipe = $requeteListeEquipe->fetchAll(PDO::FETCH_OBJ);
			return $listeEquipe;
		}
		
		function lireEquipe($id)
		{
			global $basededonnees;
	
			$LIRE_EQUIPE = "SELECT * FROM equipe WHERE idEquipe = $id";
			//echo $LIRE_EQUIPE;
			
			$requeteLireEquipe = $basededonnees->prepare($LIRE_EQUIPE);
			$requeteLireEquipe->bindParam(":id_equipe", $id);
			$requeteLireEquipe->execute();
			$equipe = $requeteLireEquipe->fetch(PDO::FETCH_OBJ);
			
			//print_r($equipe);
			//var_dump($equipe);	
			
			return $equipe;
		}
		
		function ajouterEquipe($equipe)
		{
			global $basededonnees;
			//print_r($_POST);
			//$nom = $_POST["nom"];
			//$creation = $_POST["creation"];
			//$resume =$_POST["resume"];
			$nom = $equipe->nom;
			$creation = $equipe->creation;
			$resume = $equipe->resume;
			
			
			//$SQL_AJOUTER_EQUIPE = "INSERT into equipe(nom,creation,resume) VALUES('".$nom."','".$creation."','".$resume."')";
			$SQL_AJOUTER_EQUIPE = "INSERT into equipe(nom,creation,resume) VALUES(:nom,:creation,:resume)";
			//echo $SQL_AJOUTER_EQUIPE;
			$requeteAjouterEquipe = $basededonnees->prepare($SQL_AJOUTER_EQUIPE);
			$requeteAjouterEquipe->bindParam(':nom',$nom, PDO::PARAM_STR);
			$requeteAjouterEquipe->bindParam(':creation',$creation, PDO::PARAM_INT);
			$requeteAjouterEquipe->bindParam(':resume',$resume, PDO::PARAM_STR);
			$requeteAjouterEquipe->execute();
		}
		
		function modifierEquipe($equipe)
		{
			global $basededonnees;
		//	$nom = $_POST["nom"];
			//$creation = $_POST["creation"];
			//$resume = $_POST["resume"];
			//$id = $_POST["id"];
			$nom = $equipe->nom;
			$creation = $equipe->creation;
			$resume = $equipe->resume;
			$id = $equipe->id;
			
	
			//$SQL_MODIFIER_EQUIPE = "UPDATE equipe SET nom = '".$nom."', creation = '".$creation."', resume = '".$resume."' WHERE idEquipe = ".$id;
			$SQL_MODIFIER_EQUIPE = "UPDATE equipe SET nom = :nom, creation = :creation,resume = :resume WHERE idEquipe = :id_equipe";
			//echo $SQL_MODIFIER_EQUIPE;
			$requeteModifierEquipe = $basededonnees->prepare($SQL_MODIFIER_EQUIPE);
			$requeteModifierEquipe->bindParam(':nom',$nom, PDO::PARAM_STR);
			$requeteModifierEquipe->bindParam(':creation',$creation, PDO::PARAM_INT);
			$requeteModifierEquipe->bindParam(':resume',$resume, PDO::PARAM_STR);
			$requeteModifierEquipe->bindParam(":id_equipe", $id, PDO::PARAM_INT);
			$requeteModifierEquipe->execute();
			
		}
		function effacerEquipe($id)
		{
			global $basededonnees;
			$SQL_EFFACER_EQUIPE = "DELETE FROM equipe WHERE idEquipe = :id_equipe";
 			//echo $SQL_EFFACER_EQUIPE;
			$requeteEffacerEquipe= $basededonnees->prepare($SQL_EFFACER_EQUIPE);
			$requeteEffacerEquipe->bindParam(":id_equipe", $id);
 			$requeteEffacerEquipe->execute();
			
		}
		function rechercherSuggestions($recherche)
		{
			global $basededonnees;
			$SQL_RECHERCHER_SUGGESTIONS = "SELECT nom as terme FROM equipe WHERE nom LIKE '%$recherche%'";
			//echo $SQL_RECHERCHER_SUGGESTIONS ;
			$requetRechercherSuggestions = $basededonnees->prepare($SQL_RECHERCHER_SUGGESTIONS);
			
			//$requeteRechercherSuggestions->bindParam(':recherche', $recherche, PDO::PARAM_STR);
			$requetRechercherSuggestions->execute();
			$suggestions = $requetRechercherSuggestions->fetchAll(PDO::FETCH_OBJ);
			//print_r($suggestions);
			return $suggestions;
			
		}
	}

?>