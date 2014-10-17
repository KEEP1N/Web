<?php
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
?>

<!DOCTYPE html>
<html>

	<body>
	
		<section class="paragraphe">
	
			<h1> Historique de
			<?php
				print(User_name());
			?>
			</h1>
			<table style="margin-left:100px">
				<tr>
					<th>Porte</th>
					<th>Date</th>
					<th>Heure</th>
				</tr>
				<tr>
					<td>A008</td>
					<td>09/09/14</td>
					<td>11h20</td>
				</tr>
			</table>
			<a href = "AccueilMonCompte.php"><input type="button" id="button" value="Retour" style="margin-left:180px">
		
		</section>

	</body>
	
</html>
 

