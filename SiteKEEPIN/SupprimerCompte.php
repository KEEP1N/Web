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
	
	<div id=supprimercompte><h1>Supprimer un compte</h1></div>
	<section class=paragraphe>
	<label for="Suppr">Sélectionner le compte :</label><select name="Suppression" id="Suppr"><br/>

	<a href = "AccueilAdmin.php"><input type="submit" id="submit" value="Valider"; onclick="alert('Attention! Vous êtes sur le point de supprimer ce compte. Êtes-vous sûr?')"/></a>
	</section>
	

	<footer>
	Copyright Corp'Access - Tous droits réservés <br/>
	</footer>

	</body>
</html>