<?php

if (isset($_POST['submit_commentaire'])){
	if(isset($_POST['pseudo'],$_POST['commentaire']) AND !empty($_POST['pseudo']) AND !empty($_POST['commentaire']))
	{
		
	}
	else{
		$c_erreur = "Tous les champs doivent etre complete";
	}
		
	
}
?>




<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1> NBA</h1>
	
<a href="liste-equipe.php">La Liste d'equipe</a> 
</body>
</html>