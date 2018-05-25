<?php
	$base = "nba";
	$hote = "localhost";
	$usager ="nba";
	$motdepasse = "bassirou199419";
	$dsn = "mysql:dbname=".$base.";host=".$hote;
	$basededonnees = new PDO($dsn,$usager,$motdepasse);

?>