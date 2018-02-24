<?php

	$idEquipe = filter_var($_GET["equipe"], FILTER_SANITIZE_NUMBER_INT);
	
	include "accesseur/EquipeDAO.php";
	$equipeDao = new EquipeDAO();
	$equipe = $equipeDao->lireEquipe($idEquipe);

?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>NBA</title>
</head>
<body>
	<header>
		<h1>NBA</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2>Equipe : <?=$equipe['nom']?></h2></header>
		
		<div>
			Creation : <?=$equipe['creation']?>
		</div>
		
		<div>
			Resume : <?=$equipe['resume']?>
		</div>
			
		
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>