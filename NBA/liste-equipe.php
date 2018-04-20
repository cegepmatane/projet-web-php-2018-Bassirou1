<?php 

		include "accesseur/EquipeDAO.php";
	
	$equipeDao = new EquipeDAO();
	$recherche = "";
	if(!empty($_POST['action-rechercher']))
	{
		//print_r($_POST);
		$recherche = filter_var($_POST['recherche'],FILTER_SANITIZE_STRING); 
		//echo $recherche;
		$listeEquipe = $equipeDao->rechercherEquipe($recherche);
			
	}
	else
	{
		$listeEquipe = $equipeDao->lireListe();
		//print_r($listeEquipe);
	}
		

	
	
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
	<script type="text/javascript" src="lib/Ajax.js"></script>
	<script type="text/javascript">
		// ETAPE 1 - EVENEMENT
		function rechercherLesSuggestions()
		{
			console.log('#recherche.onkeyup');
			recherche = document.querySelector("#recherche").value;
			parametre = "recherche=" + recherche;
			console.log();
			
			// ETAPE 2 - REQUETE
			ajax = new Ajax();
			//console.log(ajax);
			url = 'http://142.44.162.203/nba/action/suggestion.php';
			ajax.executer("GET", url, parametre, recevoirLesSuggestions);
			
			
		}
		
		// ETAPE 3 - RECEPTION (traitement)
		function recevoirLesSuggestions(ajax)
		{
			suggestions = ajax.responseText;
			console.log('suggestions='+suggestions);
			
			// ETAPE 4 - AFFICHAGE (retroaction)
			document.querySelector("#boite-suggestions").style.display = "block";
			document.querySelector("#boite-suggestions").innerHTML = suggestions;
			
		}
		// ETAPE 5 - SUITE
		function afficherSuggestion(suggestion)
		{
			document.querySelector('#recherche').value=suggestion;
			document.querySelector("#boite-suggestions").style.display = "none";			
		}
		
	</script>
	<style>
	#section-recherche
	{
		position:relative;
	}
	#boite-suggestions
	{
		display:none;
		border:solid 2px #ceaf37;
		background-color:#f7e9b4;
		position:absolute;
	}
	</style>
</head>
<body>
	<header>
		<h1>NBA</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2>Liste des equipes</h2></header>
	
	<section id="section-recherche">
		<form method="post" action="" id="formulaire-recherche">
			
			<input type="text" name="recherche" id="recherche" value="<?=$recherche?>" onkeyup="rechercherLesSuggestions()"/>
			<input type="submit" value="Rechercher"  name="action-rechercher"/>
		
		</form>
		<div id="boite-suggestions"></div>
	
	
	</section>
	
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
	<a href="inscription.php">S'inscrire</a> 
	<a href="connexion.php"><?=_('Me connecter')?></a>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>