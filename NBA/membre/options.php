<?php
session_start();

$filtreMembre = array(
	'prenom' => FILTER_SANITIZE_ENCODED,
	'nom' => FILTER_SANITIZE_ENCODED,
	'psudonyme' => FILTER_SANITIZE_ENCODED,
	'courriel' => FILTER_SANITIZE_ENCODED,
	'motdepasse' => FILTER_SANITIZE_ENCODED,

);

$_SESSION['membre'] = filter_var_array($_POST, $filtreMembre);
print_r($_SESSION);


?>





<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Inscription d'un membre - Options</title>
	<link rel="stylesheet" type="text/css" href="membre.css"/>

</head>
<body>
	<header>
		<h1>Inscription d'un membre - Options</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2></h2></header>
	
		<form method="post" action="conditions.php">
		
		
		<fieldset>
		
			<legend>Préférences de couleurs</legend>
		
			<div id="entree-couleur">
				<label for="couleur">Couleur</label>
				<select name="couleur" id="couleur">
					<option>bleu</option>
					<option>rouge</option>
					<option>jaune</option>
					<option>noir</option>
				</select>
			</div>
						
		</fieldset>
		
		<fieldset>

			<legend>Préférences de communication</legend>
			
			<div id="entree-lettre">
				<input type="checkbox" id="lettre" name="lettre"/>
				<label for="lettre">Voulez-vous recevoir la lettre ?</label>
			</div>

			<div id="entree-alerte">
				<input type="checkbox" id="alerte" name="alerte"/>
				<label for="alerte">Voulez-vous recevoir les alertes ?</label>
			</div>
			
		</fieldset>
			
		<input type="submit" name="action-inscription-identification" value="Suivant">			
			
		</form>
	
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>