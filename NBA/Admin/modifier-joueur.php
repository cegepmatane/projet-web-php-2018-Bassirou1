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
	<title>NBA- Admin</title>
</head>
<body>
	<header>
		<h1>NBA- Admin</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2>Modifier un joueur</h2></header>
		<form method="post" action="action/action-modifier-joueur.php?joueur=<?=$idJoueur?>" enctype="multipart/form-data">
		
			<div>
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom" value="<?=$joueur->nom?>"/>
			</div>
		
			<div>
				<label for="biographie">Biographie</label>
				<textarea name="biographie" id="biographie"><?=$joueur->biographie?></textarea>
			</div>
			
			<div>
				<label for="club">Club</label>
				<input type="text" name="club" id="club" value="<?=$joueur->club?>"/>
			</div>
			
			<div>
				<label for="image">Image</label>
				<input type="file" name="illustration"/>
			
			</div>
												
			<input type="submit" name="action-modifier-joueur" value="Enregistrer"/>
			
		</form>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>