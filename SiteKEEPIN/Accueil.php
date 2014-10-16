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
	
	<section class=paragraphe>
	<label for ="pseudo">Pseudo :</label> <input type="text" name="pseudo" id="pseudo" /></br>
	<label for="mdp">Mot de passe : </label><input type="text" name="mdp" /></br>
	<a href="MDPOublie.php" id="mdpoublie">Mot de passe oublié?</a><br/>
	<input type="submit" id="submit" value="Valider"/>
	</section>
	

	<footer>
	Copyright Corp'Access - Tous droits réservés <br/>
	</footer>

	</body>
</html>