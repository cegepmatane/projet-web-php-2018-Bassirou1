<?php
if(!empty($_POST['action-ajouter-equipe']))
{
	//echo "action-ajouter-equipe";
	$filtreEquipe = array();
	$filtreEquipe['nom'] = FILTER_SANITIZE_STRING;
	$filtreEquipe['creation'] = FILTER_SANITIZE_NUMBER_INT;
	$filtreEquipe['resume'] = FILTER_SANITIZE_STRING;
	$equipe = filter_var_array($_POST, $filtreEquipe); 
	//print_r($equipe);
	include_once "../accesseur/EquipeDAO.php";
	$equipeDao = new EquipeDAO();
	$equipeDao->ajouterEquipe($equipe);	
}

?>