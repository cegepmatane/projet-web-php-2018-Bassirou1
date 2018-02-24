<?php 	
	include "accesseur/EquipeDAO.php";
	$equipeDao = new EquipeDAO();
	$listeEquipe = $equipeDao->lireListe();
	//exit(0);
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<h1></h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2></h2></header>
	
	
		<?php
		foreach($listeEquipe as $equipe)
		{
		?>
		<div>
			<div>
				<a href="equipe.php?equipe=<?=$equipe['idEquipe']?>">
					<?=$equipe['nom']?>
				
				</a>
				
			</div>
		</div>
		<?php
		}
		?>
	
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>