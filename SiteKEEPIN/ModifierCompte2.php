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
		<h1>Modifier Compte Utilisateur</h1>
	
	
	<label for="Nom">Nom :</label><input type="text" name="Nom" id="Nom" value="Martin"/></br>
	
	<label for ="Prenom">Prenom :</label> <input type="text" name="Prenom" id="Prenom" value="Jacques" /></br>
	
	<label for ="DDN">Date de Naissance :</label><input type="date" name="Date_de_Naissance" value="22/11/1979" id="DDN" /><br />
	
	<label for ="mail">Adresse e-mail :</label> <input type="text" name="mail" id="mail" value="martin_jacques"/>@keepin.com</br>
	
	<label for="Tel">Telephone: </label><input type="text" name="Tel" value="06 72 58 47 06" id="Tel"/></br>
	
	<label for ="mdp">Mot de Passe :</label> <input type="text" name="mdp" id="mdp" value="2211"/></br>
	
	<label for ="Poste">Poste :</label> <input type="text" name="Poste" id="Poste" value="Devellopeur"/></br>
	
	<label for="Acc">Accréditation :</label><select name="Accreditation" id="Acc"><br />
		<option value="1">Niveau 1</option>
		<option value="2" selected="selected">Niveau 2</option>
		<option value="3">Niveau 3</option></select><br />
	
	<a href = "AccueilAdmin.php"><input type="submit" id="submit" value="Valider"; onclick= "alert('Félicitations ! Le compte a été modifié !')"/></a>
	<a href = "ModifierCompte1.php"><input type="reset" id="reset" value="Annuler"/></a>
	<br /><br /><br /><br /><br /></section>
	

	<footer>
	Copyright Corp'Access - Tous droits réservés <br/>
	</footer>

	</body>
</html>