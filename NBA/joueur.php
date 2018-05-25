<?php
	$idJoueur = filter_var($_GET['joueur'], FILTER_SANITIZE_NUMBER_INT);
	//echo $idJoueur;
	
	include "accesseur/JoueurDAO.php";
	$joueurDao = new JoueurDAO();
	$joueur = $joueurDao->lireJoueur($idJoueur);
	//print_r($joueur);
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
		<header><h2>Joueur : <?=$joueur->nom?></h2></header>

		<p><?=$joueur->biographie?></p>
		
			<img src="illustration/<?php echo $joueur->photo;?>"/>
		
		
		
		
		
		<nav><a href="equipe.php?equipe=<?=$joueur->idEquipe?>">Revenir a la liste des joueurs</a></nav>
	</section>
	
	
	<footer><span id="signature"></span></footer>
</body>
</html>