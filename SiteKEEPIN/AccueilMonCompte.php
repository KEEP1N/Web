<?php
	session_start();
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
?>

<!DOCTYPE html>
<html>
	
	<body>
	
		<section class="paragraphe">
	
			<h1 style="margin-left: 145px">Mon compte</h1>
			<?php MonCompte() ?>
			<a href = "HistoriqueUser.php"><input type="button" id = "button" name="consultermonhistorique" value="Consulter mon historique">
			<a href = "Accreditation.php"><input type="button" id = "button" name="demandeaccreditations" value="Demande d'accréditations">
			<a href = "ModifierMDP.php"><input type="button" id = "button" name="changermdp" value="Changer son mot de passe">
		
		</section>

	</body>

</html>
 

