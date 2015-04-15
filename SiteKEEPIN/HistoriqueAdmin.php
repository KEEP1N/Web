<?php
	session_start();
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
?>

<!DOCTYPE html>
<html>

	<body>
		<?php
			if (isset($_SESSION['empl_mail']) && $_SESSION['empl_ro_ID']==2) :
		?>
		<input type="text" list="Batiment "/>
		<datalist id="Batiment" >
				<option> Bat B
				</option>
				</datalist>
			
		
		<input type="text" list="Date" >
		<datalist id="Date" >
				<option> 03/2015
				</option>
		</datalist>
		<br/>
		<a ><input type="button" id="button" value="Historique"/></a>
		<section class=paragraphe>
	
			<h1 style="margin-left: 150px">Historique</h1>
			<table style="margin-right: 170px">
				<tr>
					<th>Porte</th>
					<th>Nom</th>
					<th>Prenom</th>
					<th>Date</th>
					<th>Heure</th>
					
				</tr>
				<tr>
					<td>B16</td>
					<td>Bricou</td>
					<td>John</td>
					<td>13/03/2015</td>
					<td>15h20</td>
					
				</tr>
				<tr>
					<td>B22</td>
					<td>Zen</td>
					<td>Viktor</td>
					<td>11/03/2015</td>
					<td>15h55</td>
					
				</tr>
				<tr>
					<td>B25</td>
					<td>Bricou</td>
					<td>John</td>
					<td>10/03/2015</td>
					<td>17h05</td>
					
				</tr>
			</table>
			
			<?php endif;?>

		</section>
		
	<a ><input type="button" id="button" value="Export PDF"/></a>
	</body>
	
</html>