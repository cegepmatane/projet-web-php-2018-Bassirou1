<?php
//if(!empty($_POST['action-modifier-equipe']))
{
	
	//echo "action-modifier-equipe";
	//print_r($_POST);
	include_once "../accesseur/EquipeDAO.php";
 	$equipe = $_POST; 
 	$equipeDao = new EquipeDAO();
 	$equipeDao->modifierEquipe($equipe);
	
	
}

?>