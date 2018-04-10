<?php
session_start();
include "basededonnees.php";

if(isset($_POST['connexion']))
{
	$mail = htmlspecialchars($_POST['mail']);
	$mdp = sha1($_POST['mdp']);
	global $basededonnees;
	if(!empty($mail) AND !empty($mdp))
	{
		$requeteUser = $basededonnees->prepare("SELECT * FROM membre WHERE mail = ? AND motdepasse = ?");
		$requeteUser->execute(array($mail,$mdp));
		$userExiste = $requeteUser->rowCount();
		if($userExiste == 1)
		{
			$userInfo = $requeteUser->fetch();
			$_SESSION['id'] = $userInfo['id'];
			$_SESSION['pseudo'] =$userInfo['pseudo'];
			$_SESSION['mail'] = $userInfo['mail'];
			header("Location: profil.php?id=" .$_SESSION['id']);
		}
		else
		{
			$erreur = "Mauvais mail ou mot de passe";
		}
	}
	else
	{
		$erreur="Tous les champs doivent etre completes";
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
	<div align ="center">
		<h2>Connexion</h2>
		
		<form method="POST" action="">
			<input type="email" name="mail" placeholder="Mail"/>
			<input type="password" name="mdp" placeholder="Mot de passe"/>
			<input type="submit" name="connexion" value="Se connecter"/>
			
			
		</form>
		
		<?php
		if(isset($erreur))
		{
			echo $erreur;
		}
		
		?>
	
	</div>

</body>
</html>