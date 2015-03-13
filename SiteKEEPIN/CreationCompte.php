<?php
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
?>

<!DOCTYPE html>
<html>

	<body>
	
		<section class=paragraphe>
	
			<h1>Creation Compte Utilisateur</h1>
		
			<label for="Nom">Nom :</label><input type="text" name="Nom" id="nom"/></br>
			<label for ="Prenom">Prenom :</label> <input type="text" name="Prenom" id="prenom" /><br/>
			<label for ="DDN">Date de Naissance :</label><input type="date" name="Date_de_Naissance" value="jj/mm/aaaa" id="DDN" /><br/>
			<label for ="Matricule">Matricule :</label> <input type="text" name="Matricule" id="pseudo" /><br/>
			<label for ="Poste">Poste :</label> <input type="text" name="Poste" id="poste" /><br/>
			<label for="Tel">Telephone: </label><input type="text" name="Tel" value="+33" id="tel"/></br>
			<label for ="mail">Adresse e-mail :</label> <input type="text" name="mail"id="email"/><br/>
			<label for ="mdp">Mot de Passe :</label> <input type="text" name="mdp" id="mdp" /><br/>
			<label for ="codepin">Code PIN :</label> <input type="text" name="codepin" id="codepin" /><br/>
			<label for="role">Rôle :</label><select name="Role" id="role"><br/>
				<option id="1" value="use">Utilisateur</option>
				<option id="2" value="mod">Modérateur</option></select><br/>
				
			
			<label for="Acc">Accréditation :</label><select name="Accreditation" id="acc"><br/>
				<option id="option" value="1">Niveau 1</option>
				<option id="option" value="2">Niveau 2</option>
				<option id="option" value="3">Niveau 3</option></select><br/>

			<a href = "AccueilAdmin.php"><input type="submit" id=submit value="Valider"; onclick = "alert('Félicitations ! Nouveau compte créé.')"/></a>
			<a href = "AccueilAdmin.php"><input type="button" id="button" value="Retour"/></a>
		
		</section>

	</body>
	
</html>