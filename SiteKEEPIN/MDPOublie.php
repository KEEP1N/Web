<?php
	include'fonctionphp.php';
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <link rel="stylesheet" href="style/style.css" />
		<title>
		Corp'Access - Société de sécurité informatique
		</title>
	</head>
	<body>
	<header>
	<style type="text/css">
	a:link 
	{ 
	text-decoration:none; 
	}
	</style>
	<section class=logo>
	</section>
	</header>
	
	<div id=mdpoublie><h1> Mot de passe oublié</h1></div>
	<section class=paragraphe>
	<label for="mail">Adresse e-mail: </label><input type="email" name="mail"/></br>
	<a href = "Accueil.php"><input type="submit" id="submit" value="Valider"; onclick = "alert ('Vous allez recevoir votre mot de passe par e-mail')"/></a>
	</section>
	
	<footer>
	Copyright Corp'Access - Tous droits réservés <br/>
	</footer>

	</body>
</html>