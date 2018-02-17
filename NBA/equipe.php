<?php
	require_once "basededonnes.php";
	
	$LIRE_EQUIPE = "SELECT * FROM equipe WHERE idEquipe = '". $_GET['equipe']."'";
	
	$requeteLireEquipe = $basededonnees->prepare($LIRE_EQUIPE);
	$requeteLireEquipe->execute();
	$equipe = $requeteLireEquipe->fetchAll();

	//print_r($equipe);
	
	
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
		<nav></nav>
			
	</header>
	<section id="contenu">
	<header><h2>Equipe:
	</h2>
	<?php
	
		foreach($equipe as  $ligne){
			echo "<div>";
			echo "<a>". $ligne['nom'] . ": ". $ligne['resume'];
			
			echo "</div>";
			
		}

	?>
	
	
	</header>
	
	
	
	
	
	</section>
	
</body>
</html>