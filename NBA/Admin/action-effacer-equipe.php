<?php 
if(!empty($_POST['action-effacer-equipe']))
{
	if(!empty($_POST['confirmation-oui']))
	{
		
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