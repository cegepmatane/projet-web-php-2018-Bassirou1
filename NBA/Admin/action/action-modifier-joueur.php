<?php
if(!empty($_POST['action-modifier-joueur']))
{
	//echo "modifier un joueur";
	$joueur = $_POST; // TODO filter
	$joueur['idJoueur'] = $_GET['joueur']; // TODO filter
	include_once "../../accesseur/JoueurDAO.php";
	$joueurDao = new JoueurDAO();
	$joueurDao->modifierJoueur($joueur); 
	
	//Pour l'image
	//echo "POST";
	//print_r($_POST);
	//echo "FILES: ";
	//echo "<pre>";
	//print_r($_FILES);
	//echo "<pre>";
	$repertoire_illustration = "/nba/illustration/";
	$source = $_FILES["illustration"]["tmp_name"];
	$destination = $_SERVER["DOCUMENT_ROOT"] . $repertoire_illustration . $_FILES["illustration"]["name"];
	
	$nomImage = $_FILES['illustration']['name'];
	$idJoueur = $_GET['joueur'];


?>

<div>
<?php 	echo "(variable \$fichier_source) Mon fichier à déplacer est " . $source;?>
</div>
<div>
<?php 	echo "(variable \$fichier_destination) Ma destination est " . $destination; ?>
</div>
<?php 
if(move_uploaded_file($source,$destination))
{
	echo "Votre envoi de fichier a bien fonctionné";
	?>
	<img src="illustration/<?=$nomImage?>" alt=""/>
	
	<?php
	include_once "../../accesseur/JoueurDAO.php";
	$joueurDao = new JoueurDAO();
	
	$joueurDao->sauvegarderPhoto($idJoueur,$nomImage);
}
else
{
	echo "Votre envoi de fichier a échoué";
}
}

?>




	

