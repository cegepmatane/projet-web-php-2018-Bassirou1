<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Inscription d'un membre - Identification</title>
	<link rel="stylesheet" type="text/css" href="membre.css"/>
</head>
<body>
	<header>
		<h1>Inscription d'un membre - Identification</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2></h2></header>
	
		<form method="post" action="options.php">
		
		
		<fieldset>
		
			<legend>Identité</legend>
		
			<div id="entree-prenom">
				<label for="prenom">Prénom</label>
				<input type="text" id="prenom" name="prenom"/>
			</div>
			
			<div id="entree-nom">
				<label for="nom">Nom</label>
				<input type="text" id="nom" name="nom"/>
			</div>
			
			<div id="entree-pseudonyme">
				<label for="pseudonyme">Pseudonyme</label>
				<input type="text" id="pseudonyme" name="pseudonyme"/>
			</div>			
			
		</fieldset>
		
		<fieldset>

			<legend>Authentification</legend>
			
			<div id="entree-courriel">
				<label for="courriel">Courriel</label>
				<input type="text" id="courriel" name="courriel"/>
			</div>

			<div id="entree-motdepasse">
				<label for="motdepasse">Mot de passe</label>
				<input type="password" id="motdepasse" name="motdepasse"/>
			</div>
			
		</fieldset>
			
		<input type="submit" name="action-inscription-identification" value="Suivant">			
			
		</form>
	
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>