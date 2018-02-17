<?php

	$idEquipe = $_GET["equipe"];

	require_once "basededonnes.php";
		
	$LIRE_EQUIPE = "SELECT * FROM equipe WHERE idEquipe = $idEquipe";
	//echo $LIRE_EQUIPE;
	
	$requeteLireEquipe = $basededonnees->prepare($LIRE_EQUIPE);
	$requeteLireEquipe->execute();
	$equipe = $requeteLireEquipe->fetch();
	
	//print_r($equipe);
	//var_dump($equipe);
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
			
			<input type="hidden" name="id" value="<?=$equipe['idEquipe']?>"/>

			Voulez-vous vraiment effacer <?=$equipe['nom']?> ?

			<input type="submit" name="confirmation-oui" value="Oui"/>
			<input type="submit" name="confirmation-non" value="Non"/>
			
			<input type="hidden" name="action-effacer-equipe" value="1"/>
			
		</form>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>