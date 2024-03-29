<?php

	$idEquipe = filter_var($_GET["equipe"],FILTER_SANITIZE_NUMBER_INT);

	include_once "../accesseur/EquipeDAO.php";
	$equipeDao = new EquipeDAO();
	$equipe = $equipeDao->lireEquipe($idEquipe);
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<h1>Admin Equipes</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2>Effacer une equipe</h2></header>
		<form method="post" action="liste-equipe-admin.php">
			
			<input type="hidden" name="id" value="<?=$equipe->idEquipe?>"/>

			Voulez-vous vraiment effacer <?=$equipe->nom?> ?

			<input type="submit" name="confirmation-oui" value="Oui"/>
			<input type="submit" name="confirmation-non" value="Non"/>
			
			<input type="hidden" name="action-effacer-equipe" value="1"/>
			
		</form>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>