<?php
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
?>

<!DOCTYPE html>
<html>
	
	<body>
	
		<section class=paragraphe>
		
			<h1>Supprimer un compte</h1>
			<label for="Suppr">Sélectionner le compte :</label>
			<select name="Suppression" id="Suppr"><br/>
			<a href = "AccueilAdmin.php"><input type="submit" id="submit" value="Valider"; onclick="alert('Attention! Vous êtes sur le point de supprimer ce compte. Êtes-vous sûr?')"/></a>
		
		</section>
	
	</body>
	
</html>