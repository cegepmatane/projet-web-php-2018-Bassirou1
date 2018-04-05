<?php 
if(!empty($_POST['action-effacer-equipe']))
{
	if(!empty($_POST['confirmation-oui']))
	{
		$idEquipe = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
		include_once "../accesseur/EquipeDAO.php";
		$equipeDao = new EquipeDAO();
		$equipeDao->effacerEquipe($_POST['id']);
	}
	else
	{
	?>
	Vous ne voulez pas supprimer l'equipe
	<?php	
	}
}
	?>