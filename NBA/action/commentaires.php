<?php

//section traitement
include "../accesseur/CommentairesDAO.php";
$commentaireDAO = new CommentairesDAO();

$ensembleCommentaire = array();
$ensembleCommentaire['pseudo'] = $_GET['pseudo'];
$ensembleCommentaire['commentaire'] = $_GET['commentaire'];
$ensembleCommentaire['idEquipe'] = $_GET['idEquipe'];

//print_r ($ensembleCommentaire['idEquipe']);
$commentaireDAO->insererUnCommentaire($ensembleCommentaire);
//$afficherCommentaire = $commentaireDAO->recupererCommentaire($ensembleCommentaire['idEquipe']);
?>

<?php
//section affichage


//echo "<p> Commentaire : ".$afficherCommentaire['commentaire']."</p>"
//echo "<label> pseudo : ".$afficherCommentaire['pseudo']."</label>";

?>
<div>
<p><?=$ensembleCommentaire['commentaire']?></p>
<label><?=$ensembleCommentaire['pseudo']?></label>
</div>
