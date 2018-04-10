<?php
include "basededonnees.php";

if(isset($_POST['formeInscription']))
{
	//pour eviter les injection et cripté le mot d pass
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$mail =  htmlspecialchars($_POST['mail']);
		$mail2 = htmlspecialchars($_POST['mail2']);
		$mdp = sha1($_POST['mdp']);
		$mdp2 = sha1($_POST['mdp2']);
	if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
	{
		global $basededonnees;
		//pour verrifier si mail n'est pas egal a mail2 et 
		if($mail == $mail2)
		{
			if(filter_var($mail, FILTER_VALIDATE_EMAIL))
			{
				if($mdp == $mdp2)
				{
					$insertmembre = $basededonnees->prepare("INSERT INTO membre(pseudo,mail,motdepasse) VALUES('".$pseudo."','".$mail."','".$motdepasse."')");
					$insertmembre->execute(array($pseudo,$mail,$mdp));
					$erreur ="Votre compte est cree";
				}
				else
				{
					$erreur="Vos mot de passe ne correspondent pas !";
				}
			}
			
		}
		else 
		{
			$erreur="Vos addresse mail ne correspondent pas !";
		}	
			
		
	}
	else
	{
		$erreur ="Tous les champs doivent etre completes";
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
		<h3>Inscription</h3>
		
		<form method="POST" action="">
		
			<table>
				<tr>
					<td align="right">
						<label for="pseudo"> Pseudo: </label>
				
					</td>
					<td>
						<input type="text" placeholder="votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)){echo $pseudo;} ?>"/>
					</td>
		
				</tr
				
				<tr>
					<td align="right">
						<label for="mail"> Mail: </label>
				
					</td>
					<td>
						<input type="email" placeholder="votre Mail" id="mail" name="mail" value="<?php if(isset($mail)){echo $mail;} ?>"/>
					</td>
		
				</tr
				
				
				<tr>
					<td align="right">
						<label for="mail2"> Confirmation du Mail: </label>
				
					</td>
					<td>
						<input type="email" placeholder="Confirmer votre Mail" id="mail2" name="mail2" value="<?php if(isset($mail2)){echo $mail2;} ?>"/>
					</td>
		
				</tr
				<tr> 
					<td align="right">
						<label for="mdp"> Mot de passe: </label>
				
					</td>
					<td>
						<input type="password" placeholder="Votre mot de passe " id="mdp" name="mdp"/>
					</td>
		
				</tr
				<tr> 
					<td align="right">
						<label for="mdp2"> Confirmation du  Mot de passe: </label>
				
					</td>
					<td>
						<input type="password" placeholder="Confirmer votre mdp " id="mdp2" name="mdp2"/>
					</td>
		
				</tr  
				<tr>
					<td></td>
					<td>
						<input type="submit" name="formeInscription" value="M'inscrire"/>
					</td>
				</tr>
			</table>
			
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