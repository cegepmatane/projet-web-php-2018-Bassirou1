<?php
	
	require_once "basededonnes.php";
	
	$requeteListeEquipe = $basededonnees->prepare("SELECT * FROM equipe");
	$requeteListeEquipe->execute();
	
	$listeEquipe = $requeteListeEquipe->fetchAll();
	

	
	
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
		<a href="supprimer-equipe.php?equipe=<?=$equipe['idEquipe']?>">
		Supprimer
		</a>
	</div>
	<?php
	}
	?>
	</section>
	
	<footer><span id="signature"></span></footer>
	
</body>
</html>
