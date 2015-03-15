<?php
	session_start();
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
?>

<!DOCTYPE html>
<html>

	<body>
	
		<section class=paragraphe>
		
			<h1>Accueil Modification Compte</h1>
			<label for ="Compte">Selectionner le compte à modifier : </label> <br/>
			<select name="Compte" id="compte"><br/>
				<option value="1">JACQUES.Michel</option>
				<option value="2">Robert.Durand</option>
				<option value="3">Yves.Fesket</option>
			</select>@entreprise.com<br/>
			<a href = "ModifierCompte2.php"><input type="submit" id="submit" value="Valider"/></a>
			<a href = "AccueilAdmin.php"><input type="reset" id="reset" value="Annuler"/></a>
			
	</section>


	</body>
	
</html>