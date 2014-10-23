<?php
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
?>

<!DOCTYPE html>
<html>

	<body>
		
		<section class=paragraphe>
	
			<h1 style="margin-left: 150px">Historique</h1>
			<table style="margin-right: 170px">
				<tr>
					<th>Nom</th>
					<th>Prenom</th>
					<th>Service</th>
					<th>Poste</th>
					<th>Salle</th>
					<th>date</th>
					<th>heure</th>
				</tr>
				<tr>
					<td>Martin</td>
					<td>Jean</td>
					<td>Informatique</td>
					<td>Développeur</td>
					<td>A008</td>
					<td>09/09/14</td>
					<td>11h20</td>
				</tr>
			</table>
			<?php /*HistoriqueAdmin()*/ ?>
			<a href="AccueilAdmin.php"> <input type="button" id="button" value="Retour" style="margin-left:180px"/> </a>

		</section>
	
	</body>
	
</html>