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
		<h1>Creation Compte Utilisateur</h1>
	<label for ="Matricule">Matricule :</label> <input type="text" name="Matricule" id=pseudo /></br>
	
	<label for ="Poste">Poste :</label> <input type="text" name="Poste" id=Poste /></br>
	
	<label for="Acc">Accréditation :</label><select name='Accreditation'id=Acc><br />
		<option value="1">Niveau 1</option>
		<option value="2">Niveau 2</option>
		<option value="3">Niveau 3</option></select><br />
		
	<label for="Tel">Telephone: </label><input type="text" name="Tel" value="+33" id=Tel/></br>
	
	<label for="Nom">Nom :</label><input type="text" name="Nom" id=Nom/></br>
	
	<label for ="Prenom">Prenom :</label> <input type="text" name="Prenom" id=Prenom /></br>
	
	<label for ="DDN">Date de Naissance :</label><input type="date" name="Date_de_Naissance" value="jj/mm/aaaa" id=DDN /><br />
	
	<label for ="mail">Adresse e-mail :</label> <input type="text" name="mail"id=mail/></br>
	
	<label for ="mdp">Mot de Passe :</label> <input type="text" name="mdp" id=mdp /></br>
	
	<a href = "AccueilAdmin.php"><input type="submit" id=submitcc value="Valider"; onclick = "alert('Félicitations ! Nouveau compte créé.')"/></a>
	<a href = "AccueilAdmin.php"><input type="reset" id=resetcc value="Annuler"/></a>
	<br /><br /><br /><br /><br /></section>
	

	<footer>
	Copyright Corp'Access - Tous droits réservés <br/>
	</footer>

	</body>
</html>