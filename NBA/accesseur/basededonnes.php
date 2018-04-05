<?php
	$base = "nba";
	$hote = "localhost";
	$usager ="root";
	$motdepasse = "bassirou199419";
	$dsn = "mysql:dbname=".$base.";host=".$hote;
	$basededonnees = new PDO($dsn,$usager,$motdepasse);

?>