<?php 

		include "accesseur/EquipeDAO.php";
	
	$equipeDao = new EquipeDAO();
	if(!empty($_POST['action-rechercher']))
	{
		//print_r($_POST);
		$recherche = $_POST['recherche'];
		//echo $recherche;
		$listeEquipe = $equipeDao->rechercherEquipe($recherche);
			
	}
	else
	{
		$listeEquipe = $equipeDao->lireListe();
	}
		
		
		
	
	

	
	
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
	
	<section id="section-recherche">
		<form method="post" action="" id="formulaire-recherche">
			
			<input type="text" name="recherche" id="recherche"/>
			<input type="submit" value="Rechercher"  name="action-rechercher"/>
		
		</form>
	
	
	
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
	<a href="connexion.php"> Me connecter</a>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>