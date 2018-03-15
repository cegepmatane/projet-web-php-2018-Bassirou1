<?php

	$idEquipe = filter_var($_GET["equipe"], FILTER_SANITIZE_NUMBER_INT);
	
	include "accesseur/EquipeDAO.php";
	$equipeDao = new EquipeDAO();
	$equipe = $equipeDao->lireEquipe($idEquipe);
	
	include "accesseur/JoueurDAO.php";
	$joueurDao = new JoueurDAO();
	$listeJoueur = $joueurDao->listerJoueurDequipe($idEquipe);	

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
			
		<section>
			<h3>Liste des joueurs </h3>
			<?php 
				//print_r($listeJoueur);
				foreach($listeJoueur as $joueur)
				{
				?>
				<div>
					<h4><a href="joueur.php?joueur=<?=$joueur['idJoueur']?>"> Nom : <?=$joueur['nom']?></a></h4>
					<p><?=$joueur['biographie']?></p>
					
				</div>
				<?php
				}
			?>
		</section>
	
		<nav><a href="liste-equipe.php">Revenir à la liste des equipes</a></nav>
		
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>