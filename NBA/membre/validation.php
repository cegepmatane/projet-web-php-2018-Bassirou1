<?php
session_start();
$conditions = filter


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
	
		
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>