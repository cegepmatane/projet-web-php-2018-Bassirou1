<?php 
if(!empty($_POST['action-effacer-joueur']))
{
	//echo "action-effacer-joueur";
	//print_r($_POST);

	if(!empty($_POST['confirmation-oui']))
	{		
		$idJoueur = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
		include_once "../../accesseur/JoueurDAO.php";
		$joueurDao = new JoueurDAO();
		$joueurDao->effacerJoueur($idJoueur);
	}
	else
	{
	?>
	Vous ne voulez pas supprimer le joueur?
	<?php	
	}
}
	?>