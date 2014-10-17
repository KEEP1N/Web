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
		<h1>Acceuil Modification Compte</h1>
	<label for ="Compte">Selectionner le compte à modifier : </label><select name="Compte" id="Compte"><br />
		<option value="1">Jean-mich33</option>
		<option value="2">Robert.Durand</option>
		<option value="3">Yves.Fesket</option></select>@entreprise.com<br /></br>
	
	<a href = "ModifierCompte2.php"><input type="submit" id="submit" value="Valider"/></a>
	<a href = "AccueilAdmin.php"><input type="reset" id="reset" value="Annuler"/></a>
	</section>
	

	<footer>
	Copyright Corp'Access - Tous droits réservés <br/>
	</footer>

	</body>
</html>