﻿<?php
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
	
	<section class="paragraphe">
		<h1>Mon compte</h1>
		<table>
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
				<td>Devellopeur web</td>
				<td>0718</td>
			</tr>
		</table>
		</br>
		</br>
		<a href = "HistoriqueUser.php"><input type="button" name="consultermonhistorique" value="Consulter mon historique">
		<a href = "Accreditation.php"><input type="button" name="demandeaccreditations" value="Demande d'accréditations">
		<a href = "ModifierMDP.php"><input type="button" name="changermdp" value="Changer son mot de passe">
	</section>
	
	

	<footer>
	Copyright Corp'Access - Tous droits réservés <br/>
	</footer>

	</body>
</html>
 

