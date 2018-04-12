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
			return $requeteListerJoueur->fetchAll();
		}
		
		function lireJoueur($idJoueur)
		{
			$LIRE_JOUEUR = "SELECT * FROM joueur WHERE idJoueur = $idJoueur";
			global $basededonnees;
			$requeteLireJoueur = $basededonnees->prepare($LIRE_JOUEUR);
			$requeteLireJoueur->execute();
			return $requeteLireJoueur->fetch();
		}
	
		function ajouterJoueur($joueur)
		{
			//echo "JoueurDAO.ajouterJoueur()";
			//print_r($joueur);
			$AJOUTER_JOUEUR = "INSERT INTO joueur(idEquipe, nom, biographie,club) VALUES('".$joueur['idEquipe']."','".$joueur['nom']."','".$joueur['biographie']."','".$joueur['club']."')";
			//echo $AJOUTER_JOUEUR;
			global $basededonnees;
			$requeteAjouterJoueur = $basededonnees->prepare($AJOUTER_JOUEUR);
			$requeteAjouterJoueur->execute();
		}
		
		function modifierJoueur($joueur)
		{
			//echo "JoueurDAO.modifierJoueur()";
			//print_r($joueur);
			$MODIFIER_JOUEUR = "UPDATE joueur SET nom = '".$joueur['nom']."', biographie = '".$joueur['biographie']."', club = '".$joueur['club']."' WHERE idJoueur = '".$joueur['idJoueur']."'";
			//echo $MODIFIER_JOUEUR;
			global $basededonnees;
			$requeteModifierJoueur = $basededonnees->prepare($MODIFIER_JOUEUR);
			$requeteModifierJoueur->execute();
		}
		
		function effacerJoueur($id)
		{
			//echo "JoueurDAO.effacerJoueur()";
			//print_r($joueur);
			$EFFACER_JOUEUR = "DELETE FROM joueur WHERE idJoueur = " . $id;
			//echo $EFFACER_JOUEUR;
			global $basededonnees;
			$requeteEffacerJoueur = $basededonnees->prepare($EFFACER_JOUEUR);
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