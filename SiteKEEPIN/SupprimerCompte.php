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
	
		<section class="paragraphe">
		
			<h1>Supprimer un compte</h1>
			<input type="text" name="seek" id="seek" value="E-mail"/>
			
		<a href = "AccueilAdmin.php"><input type="submit" id="submit" value="Rechercher"; onclick="alert('Attention! Vous êtes sur le point de supprimer ce compte. Êtes-vous sûr?')"/></a><br/>
		<a href = "AccueilAdmin.php"><input type="button" id="retour" value=""/></a>
		</section>
	<?php endif;?>
	</body>
	
</html>