<?php

	$idEquipe = filter_var($_GET["equipe"], FILTER_SANITIZE_NUMBER_INT);
	
	include "accesseur/EquipeDAO.php";
	$equipeDao = new EquipeDAO();
	$equipe = $equipeDao->lireEquipe($idEquipe);
	
	include "accesseur/JoueurDAO.php";
	$joueurDao = new JoueurDAO();
	$listeJoueur = $joueurDao->listerJoueurDequipe($idEquipe);	
	
	include "accesseur/CommentairesDAO.php";
	$commentaireDAO = new CommentairesDAO();
	$listeCommentaires = $commentaireDAO->listerCommentaire($idEquipe);	

?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>NBA</title>
</head>
<body>
	<header>
		<h1>NBA</h1>
		<script type="text/javascript" src="lib/Ajax.js"></script>
		<script type="text/javascript">
		
		function recevoirCommentaire(reponse)
		{
			console.log(reponse.responseText);
			commentaires = document.getElementById("commentaires");
			commentaires.innerHTML = commentaires.innerHTML + reponse.responseText;
			
			
			
		}
		
		function executerCommentaire(idEquipe)
		{
			 pseudo = document.getElementById("pseudo").value;
			 commentaire = document.getElementById("unCommentaire").value;
			console.log(pseudo, commentaire);
			 ajax = new Ajax();
					
			ajax.executer('GET', 'http://142.44.162.203/nba/action/commentaires.php',
						'pseudo=' + pseudo +  '&commentaire=' + commentaire + '&idEquipe=' + idEquipe,
						recevoirCommentaire);
		}
		
		</script>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2>Equipe : <?=$equipe->nom?></h2></header>
		
		<div>
			Creation : <?=$equipe->creation?>
		</div>
		
		<div>
			Resume : <?=$equipe->resume?>
		</div>
			<a href="http://142.44.162.203/nba/export/nba.php?equipe=<?=$idEquipe?>">PDF de l'equipe</a>
		<section>
			<h3>Liste des joueurs </h3>
			<?php 
				//print_r($listeJoueur);
				foreach($listeJoueur as $joueur)
				{
				?>
				<div>
					<h4><a href="joueur.php?joueur=<?=$joueur->idJoueur?>"> Nom : <?=$joueur->nom?></a></h4>
					<p><?=$joueur->biographie?></p>
					
				</div>
				<?php
				}
			?>
		</section>
		
		<section id="commentaire">
			<h3>Commentaires</h3>
			
			<form method ="POST" action="#" id="champs-commentaire">
				<input type="text" id="pseudo" name="pseudo" placeholder="Votre pseudo"/>
				<textarea id="unCommentaire" name="commentaire"  placeholder="Votre commentaire" ></textarea>
				
				<?php
				
				$idEquipe = $_GET['equipe'];
				echo "<input type='button' value='click' onclick='executerCommentaire($idEquipe)'/>";

				?>
			</form>

			 
			
		</section>
		<section id="commentaires">
		<?php
		foreach($listeCommentaires as $commentaires )
		{
		?>
			<div>
			<p><?=$commentaires->commentaire?></p>
			<label><?=$commentaires->pseudo?></label>
			</div>
		<?php
		}
		?>
		</section>
	
		<nav><a href="liste-equipe.php">Revenir à la liste des equipes</a></nav>
		
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>