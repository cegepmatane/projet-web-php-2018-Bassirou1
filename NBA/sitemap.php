<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->


<url>
  <loc>http://142.44.162.203/nba/</loc>
  <lastmod>2018-05-24T13:28:57+00:00</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>http://142.44.162.203/nba/liste-equipe.php</loc>
  <lastmod>2018-05-24T13:28:57+00:00</lastmod>
  <priority>0.80</priority>
</url>
<?php
require('accesseur/EquipeDAO.php');
$dao = new EquipeDAO();
$listeEquipe = $dao->lireListe();
foreach ($listeEquipe as $equipe)
{
?>
<url>

  <loc>http://142.44.162.203/nba/equipe.php?equipe=<?=$equipe->idEquipe?></loc>
  <lastmod>2018-05-24T13:28:57+00:00</lastmod>
  <priority>0.64</priority>
</url>
<?php
}
?>
<url>
  <loc>http://142.44.162.203/nba/inscription.php</loc>
  <lastmod>2018-05-24T13:28:57+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>http://142.44.162.203/nba/connexion.php</loc>
  <lastmod>2018-05-24T13:28:57+00:00</lastmod>
  <priority>0.64</priority>
</url>
<url>
  <loc>http://142.44.162.203/nba/joueur.php?joueur=1</loc>
  <lastmod>2018-05-24T13:28:57+00:00</lastmod>
  <priority>0.51</priority>
</url>



</urlset>