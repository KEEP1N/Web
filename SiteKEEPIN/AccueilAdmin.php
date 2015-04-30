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
	
			<h1>Mon compte Administrateur</h1>
			<a href = "CreationCompte.php"><input id="boutonAdmin" type="button" name="bt1" value="Ajouter un compte"/><br/></a>
			<a href = "ModifierCompte1.php"><input id="boutonAdmin" type="button" name="bt2" value="Modifier un compte"/><br/></a>
			<a href = "SupprimerCompte1.php"><input id="boutonAdmin" type="button" name="bt3" value="Supprimer un compte"/><br/></a>
			<a href = "HistoriqueAdmin.php"><input id="boutonAdmin"  type="button" name="bt4" value="Consulter Historique"/><br/></a>
		
		</section>
		<?php endif;?>
	
	</body>
	
</html>