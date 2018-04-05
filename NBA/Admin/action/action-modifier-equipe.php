<?php
if(!empty($_POST['action-modifier-equipe']))
{
	
	//echo "action-modifier-equipe";
	//print_r($_POST);
	include_once "../accesseur/EquipeDAO.php";
 	//$equipe = $_POST; 
	$filtreEquipe = array();
	$filtreEquipe['nom'] = FILTER_SANITIZE_STRING;
	$filtreEquipe['creation'] = FILTER_SANITIZE_NUMBER_INT;
	$filtreEquipe['resume'] = FILTER_SANITIZE_STRING;	
	$filtreEquipe['id'] = FILTER_SANITIZE_NUMBER_INT;
	$equipe = filter_var_array($_POST, $filtreEquipe);
	
 	$equipeDao = new EquipeDAO();
 	$equipeDao->modifierEquipe($equipe);
	
	
}

?>