
<?php
	include "action/action-modifier-equipe.php";
	$idEquipe = filter_var($_GET["equipe"], FILTER_SANITIZE_NUMBER_INT);
	
	include_once "../accesseur/EquipeDAO.php";
	$equipeDao = new EquipeDAO();
	$equipe = $equipeDao->lireEquipe($idEquipe);
	
	include "../accesseur/JoueurDAO.php";
	$joueurDao = new JoueurDAO();
	$listeJoueur = $joueurDao->listerJoueurDequipe($idEquipe);		
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
		<form method="post" action="liste-equipe-admin.php?equipe=<?=$equipe->idEquipe?>">
			
			<input type="hidden" name="id" value="<?=$equipe->idEquipe?>"/>

			<div>
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom" value="<?=$equipe->nom?>"/>
			</div>
		
			<div>
				<label for="creation">Creation</label>
				<input type="text" name="creation" id="creation" value="<?=$equipe->creation?>"/>
			</div>
			
			<div>
				<label for="resume">Resume</label>
				<textarea name="resume" id="resume"><?=$equipe->resume?></textarea>
			</div>
						
			<input type="submit" name="action-modifier-equipe" value="Enregistrer"/>
			
		</form>
		<nav><a href="liste-equipe.php">Revenir à la liste des equipes</a></nav>
	</section>
	<section>
		<a href="ajouter-joueur.php?equipe=<?=$equipe->idEquipe?>">Ajouter des Joeurs</a>
		<?php 
			foreach($listeJoueur as $joueur)
			{
				//print_r($joueur);
			?>
			<div>
				Nom <?=$joueur->nom?> 
				<a href="modifier-joueur.php?joueur=<?=$joueur->idJoueur?>">Modifier</a> 
				<a href="effacer-joueur.php?joueur=<?=$joueur->idJoueur?>">Effacer</a>
			</div>
			<?php
			}
		
		?>
	
	</section>
	<footer><span id="signature"></span></footer>
</body>
</html>