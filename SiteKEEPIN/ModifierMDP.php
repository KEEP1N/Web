<?php
	include'script/fonctionphp.php';
	include'script/db.php';
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
	
	<section class=paragraphe>
	<h1> Changement de mot de passe</h1>
	<label for="lastmdp">Ancien mot de passe: </label><input type="text" name="lastmdp" /></br>
	<label for="newmdp">Nouveau mot de passe: </label><input type="text" name="newmdp" /></br>
	<label for="newmdp">Confirmation du nouveau mot de passe: </label><input type="text" name="newmdp" /></br>
	<a href = "AccueilMonCompte.php"><input type="submit" id=submit value="Valider"; onclick="alert('Félicitations! Votre mot de passe a été changé.')"/></a>
	</section>
	

	<footer>
	Copyright Corp'Access - Tous droits réservés <br/>
	</footer>

	</body>
</html>