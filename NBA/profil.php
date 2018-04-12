<?php
session_start();
include "basededonnees.php";

if(isset($_GET['id']) AND $_GET['id'] > 0)
{
	$requeteUser = $basededonnees->prepare('SELECT * FROM membre WHERE id = ?');
	$requeteUser->execute(array($getid));
	$userInfo = $requeteUser->fetch();
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
		<h2>Profil de <?php echo $userInfo['pseudo']; ?></h2>
		
		
		<?php
			if($userInfo['id'] == $_SESSION['id'])
			{
				?>
				<a href="test">Admin</a>
				<?php
			}
		?>
		
	
	</div>

</body>
</html>
<?php
}

?>