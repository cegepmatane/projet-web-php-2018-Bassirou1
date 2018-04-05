<?php
if(!empty($_POST['action-ajouter-joueur']))
{
	//echo "ajouter une joueur";
	$joueur = $_POST; // TODO filter
	// $_POST contient deja le contexte $idEquipe à cause du champs hidden, 
	// pas besoin de combiner, sinon ce serait : 
	// $joueur['idEquipe'] = $_GET['equipe']; // TODO filter
	include_once "../../accesseur/JoueurDAO.php";
	$joueurDao = new JoueurDAO();
	$joueurDao->ajouterJoueur($joueur); 
}

?>