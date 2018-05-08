<?php
	$idJoueur = filter_var($_GET['joueur'], FILTER_SANITIZE_NUMBER_INT);
	//echo $idJoueur;
	
	include "../accesseur/JoueurDAO.php";
	$joueurDao = new JoueurDAO();
	$joueur = $joueurDao->lireJoueur($idJoueur);
	//print_r($joueur);
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>NBA - Admin</title>
</head>
<body>
	<header>
		<h1>NBA - Admin</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2>Effacer un joueur de l'equipe</h2></header>
		<form method="post" action="liste-equipe-admin.php">
			
			<input type="hidden" name="id" value="<?=$joueur['idjoueur']?>"/>

			Voulez-vous vraiment effacer le joueur ? <?=$joueur['nom']?> ?

			<input type="submit" name="confirmation-oui" value="Oui"/>
			<input type="submit" name="confirmation-non" value="Non"/>
			
			<input type="hidden" name="action-effacer-joueur" value="1"/>
			
		</form>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>