<?php
	$idEquipe = filter_var($_GET["equipe"], FILTER_SANITIZE_NUMBER_INT);
	//echo $idEquipe;
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
		<header><h2>Ajouter un joueur</h2></header>
		<form method="post" action="action/action-ajouter-joueur.php?equipe=<?=$idEquipe?>" enctype="multipart/form-data">
		
			<div>
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom"/>
			</div>
		
			<div>
				<label for="biographie">Biographie</label>
				<textarea name="biographie" id="biographie"></textarea>
			</div>
			
			<div>
				<label for="club">Club</label>
				<input type="text" name="club" id="club"/>
			</div>
			
						
			<input type="hidden" name="idEquipe" value="<?=$idEquipe?>"/>
			
			<div>
				<label for="image">Image</label>
				<input type="file" name="illustration"/>
				
			</div>
						
			<input type="submit" name="action-ajouter-joueur" value="Ajouter"/>
			
		</form>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>