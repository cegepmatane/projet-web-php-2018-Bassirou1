<?php 
	include "action-modifier-equipe.php";
?>
<?php
	
	$idEquipe = $_GET["equipe"];
	
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
		<h1>Admin Equipe</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2>Modifier une equipe</h2></header>
		<form method="post" action="modifier-equipe.php?equipe=<?=$equipe['idEquipe']?>">
			
			<input type="hidden" name="id" value="<?=$equipe['idEquipe']?>"/>

			<div>
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom" value="<?=$equipe['nom']?>"/>
			</div>
		
			<div>
				<label for="creation">Creation</label>
				<input type="text" name="creation" id="creation" value="<?=$equipe['creation']?>"/>
			</div>
			
			<div>
				<label for="resume">Resume</label>
				<textarea name="resume" id="resume"><?=$equipe['resume']?></textarea>
			</div>
						
			<input type="submit" name="action-modifier-equipe" value="Enregistrer"/>
			
		</form>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>