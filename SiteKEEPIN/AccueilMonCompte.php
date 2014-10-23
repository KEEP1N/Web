<?php
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
?>

<!DOCTYPE html>
<html>
	
	<body>
	
		<section class="paragraphe">
	
			<h1 style="margin-left: 145px">Mon compte</h1>
			<table style="margin-left:40px">
				<tr>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Service</th>
					<th>Poste</th>
					<th>Code d'accés</th>
				</tr>
				<tr>
					<td>Martin</td>
					<td>Jacques</td>
					<td>Informatique</td>
					<td>Developpeur web</td>
					<td>0718</td>
				</tr>
			</table>
			<?php MonCompte() ?>
			<a href = "HistoriqueUser.php"><input type="button" id = "button" name="consultermonhistorique" value="Consulter mon historique">
			<a href = "Accreditation.php"><input type="button" id = "button" name="demandeaccreditations" value="Demande d'accréditations">
			<a href = "ModifierMDP.php"><input type="button" id = "button" name="changermdp" value="Changer son mot de passe">
		
		</section>

	</body>

</html>
 

