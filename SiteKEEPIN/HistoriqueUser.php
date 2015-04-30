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
			if (isset($_SESSION['empl_mail']) && $_SESSION['empl_ro_ID']==1) :
		?>
	
		<section class="paragraphe">
	
			<h1> Historique de
			<?php
				print(User_name());
			?>
			</h1>
                        <?php 
                            $sql = select * 
                        ?>
			<a href = "AccueilMonCompte.php"><input type="button" id="retour" value=""/></a>
		
		</section>
		
		<?php endif;?>

	</body>
	
</html>
 

