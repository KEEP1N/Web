<?php
	include'script/fonctionphp.php';
	include'script/db.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <link rel="stylesheet" href="style/style.css" />
		<title>
		Corp'Access - Société de sécurité informatique
		</title>
	</head>
	<body>
	<header>
	<style type="text/css">
	a:link 
	{ 
	text-decoration:none; 
	}
	</style>
	<section class=logo>
	</section>
	</header>
	
	<div id="histoadmin">
		<h1 class=titreadmin>Historique</h1>
		</div>
		
	<section class=paragraphe>
		
		<table>
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
				<td>informatique</td>
				<td>développeur</td>
				<td>A008</td>
				<td>09/09/14</td>
				<td>11h20</td>
		</table>
		<a href = "AccueilAdmin.php"><input type="button" name="btretour" value="Retour" id="btretour"/></a>
		

	</section>
	

	<footer>
	Copyright Corp'Access - Tous droits réservés <br/>
	</footer>

	</body>
</html>