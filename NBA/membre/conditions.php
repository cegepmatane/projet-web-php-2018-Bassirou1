<?php
session_start();

//Traitemment de options.php
$filtreMembre = array(
	'couleur' => FILTER_SANITIZE_ENCODED,
	'lettre' => FILTER_SANITIZE_ENCODED,
	'alerte' => FILTER_SANITIZE_ENCODED,
);
$optionsChoisies = filter_var_array($_POST, $filtreOptions);

$_SESSION['membre']['couleur'] = $optionsChoisies['couleur'];
$_SESSION['membre']['lettre'] = $optionsChoisies['lettre'];
$_SESSION['membre']['alerte'] = $optionsChoisies['alerte'];

print_r($_POST);

?>

<!doctype html>

<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Inscription d'un membre - Conditions</title>
	<link rel="stylesheet" type="text/css" href="membre.css"/>
</head>
<body>
	<header>
		<h1>Inscription d'un membre - Conditions</h1>
		<nav></nav>		
	</header>
	
	<section id="contenu">
		<header><h2></h2></header>
	
		<form method="post" action="validation.php">
		
				
		<fieldset>

			<legend>Acceptation des conditions</legend>
			
			<textarea id="texte-conditions" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Massa sed elementum tempus egestas sed sed. Bibendum neque egestas congue quisque egestas. Mi bibendum neque egestas congue. Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. In nisl nisi scelerisque eu ultrices vitae. Faucibus et molestie ac feugiat sed. Convallis convallis tellus id interdum. Aliquam faucibus purus in massa tempor nec feugiat nisl. Sagittis purus sit amet volutpat consequat mauris nunc. Odio pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus. Euismod quis viverra nibh cras. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Lobortis mattis aliquam faucibus purus. Sit amet nisl suscipit adipiscing bibendum est ultricies integer. Mi in nulla posuere sollicitudin aliquam. At lectus urna duis convallis. Habitant morbi tristique senectus et netus.

Porta non pulvinar neque laoreet suspendisse interdum. Integer eget aliquet nibh praesent tristique magna. Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum tellus. Ut faucibus pulvinar elementum integer enim neque volutpat ac. Diam vel quam elementum pulvinar etiam non quam. Turpis massa tincidunt dui ut ornare lectus. Elementum pulvinar etiam non quam lacus. Blandit aliquam etiam erat velit scelerisque in dictum non consectetur. Nunc aliquet bibendum enim facilisis gravida neque convallis a cras. Nisl nunc mi ipsum faucibus. Donec pretium vulputate sapien nec. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Purus in massa tempor nec feugiat nisl pretium fusce.

Condimentum id venenatis a condimentum vitae sapien. Placerat orci nulla pellentesque dignissim enim sit. Pulvinar sapien et ligula ullamcorper malesuada. Mattis pellentesque id nibh tortor. Augue ut lectus arcu bibendum. A diam maecenas sed enim ut sem viverra aliquet. Quis viverra nibh cras pulvinar mattis nunc sed. Quis auctor elit sed vulputate. Sem nulla pharetra diam sit amet nisl. Mauris a diam maecenas sed enim ut sem. Vulputate enim nulla aliquet porttitor lacus. Hac habitasse platea dictumst quisque sagittis purus sit amet volutpat. Ante metus dictum at tempor commodo ullamcorper a. Lectus quam id leo in vitae turpis massa sed. Nunc scelerisque viverra mauris in aliquam sem. Massa id neque aliquam vestibulum morbi blandit cursus risus.

Faucibus turpis in eu mi. Molestie nunc non blandit massa enim nec dui nunc mattis. Eu scelerisque felis imperdiet proin. Sed sed risus pretium quam vulputate dignissim suspendisse in. Dictum sit amet justo donec enim diam. In eu mi bibendum neque. Neque laoreet suspendisse interdum consectetur. Faucibus ornare suspendisse sed nisi lacus sed viverra tellus in. Pulvinar etiam non quam lacus suspendisse faucibus. Pulvinar sapien et ligula ullamcorper malesuada. Massa id neque aliquam vestibulum morbi blandit cursus risus. Consectetur adipiscing elit duis tristique sollicitudin nibh. Neque vitae tempus quam pellentesque nec nam aliquam sem. Mattis ullamcorper velit sed ullamcorper. Dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras. Ante in nibh mauris cursus mattis. Feugiat in fermentum posuere urna nec tincidunt praesent. Tempus urna et pharetra pharetra massa massa ultricies mi. Scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis. Tristique magna sit amet purus gravida quis blandit turpis cursus.

Massa placerat duis ultricies lacus sed turpis tincidunt id aliquet. Tortor id aliquet lectus proin nibh nisl. Turpis egestas integer eget aliquet. Quis viverra nibh cras pulvinar mattis nunc sed blandit libero. Non diam phasellus vestibulum lorem sed. Nam libero justo laoreet sit amet cursus sit amet dictum. Leo a diam sollicitudin tempor id eu nisl nunc mi. Ullamcorper dignissim cras tincidunt lobortis. Sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Ultricies integer quis auctor elit sed vulputate mi sit amet. Suspendisse potenti nullam ac tortor vitae purus faucibus ornare.</textarea>
			

			<div id="entree-conditions">
				<input type="radio" id="conditions-oui" name="conditions" value="oui"/>
				<label for="conditions-oui">J'accepte les conditions</label>
				<input type="radio" id="conditions-non" name="conditions" value="non"/>
				<label for="conditions-non">Je n'accepte pas</label>
			</div>
			
		</fieldset>
			
		<input type="submit" name="action-inscription-identification" value="Suivant">			
			
		</form>
	
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>