<?php
	include_once "basededonnees.php";
	class JoueurDAO
	{
	
		function listerJoueurDequipe($idEquipe)
		{			
			$LISTER_JOUEUR = "SELECT * FROM joueur WHERE idEquipe = " . $idEquipe;
			global $basededonnees;
			$requeteListerJoueur = $basededonnees->prepare($LISTER_JOUEUR);
			$requeteListerJoueur->execute();
			return $requeteListerJoueur->fetchAll(PDO::FETCH_OBJ);
		}
		
		function lireJoueur($idJoueur)
		{
			$LIRE_JOUEUR = "SELECT * FROM joueur WHERE idJoueur = $idJoueur";
			global $basededonnees;
			$requeteLireJoueur = $basededonnees->prepare($LIRE_JOUEUR);
			$requeteLireJoueur->execute();
			return $requeteLireJoueur->fetch(PDO::FETCH_OBJ);
		}
	
		function ajouterJoueur($joueur)
		{
			global $basededonnees;
			//echo "JoueurDAO.ajouterJoueur()";
			//print_r($joueur);
			$idEquipe = $joueur->idEquipe;
			$nom = $joueur->nom;
			$biographie = $joueur->biographie;
			$club =  $joueur->club;
			//$AJOUTER_JOUEUR = "INSERT INTO joueur(idEquipe, nom, biographie,club) VALUES('".$joueur['idEquipe']."','".$joueur['nom']."','".$joueur['biographie']."','".$joueur['club']."')";
			$AJOUTER_JOUEUR = "INSERT INTO joueur(idEquipe, nom, biographie,club) VALUES(:idEquipe,:nom,:biographie,:club)";
			//echo $AJOUTER_JOUEUR;
			$requeteAjouterJoueur = $basededonnees->prepare($AJOUTER_JOUEUR);
			$requeteAjouterJoueur->bindParam(':idEquipe',$idEquipe, PDO::PARAM_INT);
			$requeteAjouterJoueur->bindParam(':nom',$nom, PDO::PARAM_STR);
			$requeteAjouterJoueur->bindParam(':biographie',$biographie, PDO::PARAM_STR);
			$requeteAjouterJoueur->bindParam(':club',$club, PDO::PARAM_STR);
			$requeteAjouterJoueur->execute();
		}
		
		function modifierJoueur($joueur)
		{
			global $basededonnees;
			//echo "JoueurDAO.modifierJoueur()";
			//print_r($joueur);
			$idEquipe = $joueur->idEquipe;
			$nom = $joueur->nom;
			$biographie = $joueur->biographie;
			$club =  $joueur->club;;
			
			//$MODIFIER_JOUEUR = "UPDATE joueur SET nom = '".$joueur['nom']."', biographie = '".$joueur['biographie']."', club = '".$joueur['club']."' WHERE idJoueur = '".$joueur['idJoueur']."'";
			$MODIFIER_JOUEUR = "UPDATE joueur SET nom = :nom, biographie = :biographie, club = :club WHERE idJoueur = :idJoueur";
			//echo $MODIFIER_JOUEUR;
			$requeteModifierJoueur = $basededonnees->prepare($MODIFIER_JOUEUR);
			$requeteModifierJoueur->bindParam(':nom',$nom, PDO::PARAM_STR);
			$requeteModifierJoueur->bindParam(':biographie',$biographie, PDO::PARAM_STR);
			$requeteModifierJoueur->bindParam(':club',$club, PDO::PARAM_STR);
			$requeteModifierJoueur->bindParam(":idJoueur", $id , PDO::PARAM_INT);
			$requeteModifierJoueur->execute();
		}
		
		function effacerJoueur($id)
		{
			global $basededonnees;
			//echo "JoueurDAO.effacerJoueur()";
			//print_r($joueur);
			$EFFACER_JOUEUR = "DELETE FROM joueur WHERE idJoueur = :idJoueur" ;
			//echo $EFFACER_JOUEUR
			$requeteEffacerJoueur = $basededonnees->prepare($EFFACER_JOUEUR);
			$requeteEffacerJoueur->bindParam(":idJoueur", $id);
			$requeteEffacerJoueur->execute();
			
		}
		
		function sauvegarderPhoto($idJoueur,$nomImage)
		{
			$SAUVEGARDER_PHOTO = "UPDATE joueur SET photo ='".$nomImage."' WHERE idJoueur ='".$idJoueur."'";
			echo $SAUVEGARDER_PHOTO;
			global $basededonnees;
			$requeteSauvegarderPhoto = $basededonnees->prepare($SAUVEGARDER_PHOTO);
		    $requeteSauvegarderPhoto->execute();
			
		}
	
	
	
	}








?>