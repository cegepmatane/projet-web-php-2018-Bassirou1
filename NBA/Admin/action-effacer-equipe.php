<?php 
if(!empty($_POST['action-effacer-equipe']))
{
	//echo "action-effacer-equipe";
//print_r($_POST);

	if(!empty($_POST['confirmation-oui']))
	{
		$SQL_EFFACER_EQUIPE = "DELETE FROM equipe WHERE idEquipe = " . $_POST['id'];
		//echo $SQL_EFFACER_EQUIPE;
		require_once "basededonnes.php";
		$requeteEffacerEquipe = $basededonnees->prepare($SQL_EFFACER_EQUIPE);
		$requeteEffacerEquipe->execute();
	}
	else
	{
	?>
	Vous ne voulez pas supprimer le pokémon
	<?php	
	}
}
	?>