<?php
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
?>

<!DOCTYPE html>
<html>
	
	<body>
	
		<section class=paragraphe>
	
			<h1> Changement de mot de passe</h1>
			<label for="lastmdp">Ancien mot de passe: </label><br/><input type="text" name="lastmdp" /><br/>
			<label for="newmdp">Nouveau mot de passe: </label><br/><input type="text" name="newmdp" /><br/>
			<label for="newmdp">Confirmation du nouveau mot de passe:</label><br/><input type="text" name="newmdp" /><br/>
			<a href = "AccueilMonCompte.php"><input type="submit" id="submit" value="Valider"; onclick="alert('Félicitations! Votre mot de passe a été changé.')"/></a>
	
		</section>

	</body>
	
</html>