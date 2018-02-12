<?php
	
	require_once "basededonnes.php";
	
	$requeteListeEquipe = $basededonnees->prepare("SELECT * FROM equipe");
	$requeteListeEquipe->execute();
	
	$listeEquipe = $requeteListeEquipe->fetchAll();
	

	
	
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">	
	<title>NBA</title>
</head>
<body>
<h1>Liste des Equipes</h1>

	<?php
	
		foreach($listeEquipe as  $ligne){
			echo "<div>";
			echo "<a href='equipe.php?equipe=".$ligne['idEquipe'] ."'>".$ligne['nom']."</a>";
			echo "</div>";
			
		}

	?>
</body>
</html>
