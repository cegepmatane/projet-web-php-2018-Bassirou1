<?php
include_once "basededonnees.php";
    class CommentairesDAO
    {
	function listerCommentaire($idEquipe)
	{
		$LISTER_COMMENTAIRE= "SELECT * FROM commentaires WHERE idEquipe = " . $idEquipe;
			global $basededonnees;
			$requeteListerCommentaires = $basededonnees->prepare($LISTER_COMMENTAIRE);
			$requeteListerCommentaires->execute();
			return $requeteListerCommentaires->fetchAll();
		
	}
		
	function recupererCommentaire($unIdEquipe){
		$LISTER_COMMENTAIRE = "SELECT pseudo,commentaire FROM commentaires WHERE id_equipe = $unIdEquipe";
		//echo $LISTER_COMMENTAIRE;
		global $basededonnees;
        $requeteListerCommentaires = $basededonnees->prepare($LISTER_COMMENTAIRE);
        $requeteListerCommentaires->execute();
        return $requeteListerCommentaires->fetch();
	}
	
	function insererUnCommentaire($commentaire)
	{
		global $basededonnees;
		//print_r($commentaire);
		$idEquipe = $commentaire["idEquipe"];

		$pseudo = $commentaire["pseudo"];
		$commentaire = $commentaire["commentaire"];
		
		$AJOUTER_COMMENTAIRE = "INSERT INTO commentaires(pseudo,commentaire,id_equipe) VALUES(:pseudo, :commentaire, :idEquipe)";
		$requeteAjouterCommentaire = $basededonnees->prepare($AJOUTER_COMMENTAIRE);
		$requeteAjouterCommentaire->bindParam(':pseudo',$pseudo, PDO::PARAM_STR);
		$requeteAjouterCommentaire->bindParam(':commentaire',$commentaire, PDO::PARAM_STR);
		$requeteAjouterCommentaire->bindParam(':idEquipe',$idEquipe, PDO::PARAM_INT);
		$requeteAjouterCommentaire->execute();
	}
		
		
	}



?>