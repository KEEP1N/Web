<?php
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
?>

<!DOCTYPE html>
<html>

	<body>
	
		<section class=paragraphe>
		
			<h1>Accueil Modification Compte</h1>
			<label for ="Compte">Rechercher le compte à modifier : </label> <br/>
			<input type="text" name="Seek" id="seek"/>
			<a href = "ModifierCompte2.php"><input type="submit" id="submit" value="Valider"/></a>
			<a href = "AccueilAdmin.php"><input type="button" id="button" value="Retour"/></a>
			
	</section>


	</body>
	
</html>