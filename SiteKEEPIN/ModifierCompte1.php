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
	
		<section class=paragraphe>
		
			<h1>Accueil Modification Compte</h1>
			<label for ="Compte">Rechercher le compte à modifier : </label> <br/>
			<input type="text" name="Seek" id="seek"/>
			<a href = "ModifierCompte2.php"><input type="submit" id="submit" value="Valider"/></a>
			<a href = "AccueilAdmin.php"><input type="button" id="button" value="Retour"/></a>
			
	</section>
	<?php endif;?>

	</body>
	
</html>