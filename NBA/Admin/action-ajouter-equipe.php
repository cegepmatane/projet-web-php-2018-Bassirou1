<?php
	include_once "../accesseur/EquipeDAO.php";
	$equipe = $_POST; 
	$equipeDao = new EquipeDAO();
 	$equipeDao->ajouterEquipe($equipe);	

?>