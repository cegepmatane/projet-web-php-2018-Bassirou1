<?php 

	include "action/action-ajouter-equipe.php";
	include "action/action-effacer-equipe.php";
	include_once "../accesseur/equipeDAO.php";
	$equipeDao = new EquipeDAO();
	$listeEquipe = $equipeDao->lireListe();	
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">	
	<title>NBA</title>
</head>
<body>
<h1>Liste des Equipes</h1>
<header>
	<h1></h1>
	<nav></nav>
	</header>
	<section id="contenu">
	<header><h2></h2></header>
	<div>
	<a href="ajouter-equipe.html">Ajouter une equipe</a>
	</div>
	
	<?php
	foreach($listeEquipe as $equipe)
	{
	?>
	<div>
		<?=$equipe['nom']?>
		<a href="modifier-equipe.php?equipe=<?=$equipe['idEquipe']?>">
			
		Modifier
		</a>
		<a href="effacer-equipe.php?equipe=<?=$equipe['idEquipe']?>">
		Effacer
		</a>
	</div>
	<?php
	}
	?>
	</section>
	
	<footer><span id="signature"></span></footer>
	
</body>
</html>
