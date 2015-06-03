<?php
	session_start();
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
        
                if(empty($_SESSION['empl_ID'])) {
            header('Location:index.php');
        }
?>


		<?php
			if (isset($_SESSION['empl_mail']) && $_SESSION['empl_ro_ID']==1) :
		?>
	
		<section class="paragraphe">
	
			<h1> Historique de
			<?php
				print(User_name());
			?>
			</h1>
                        
			<a href = "AccueilMonCompte.php"><input type="button" id="retour" value=""/></a>
		
		</section>
		
		<?php endif;?>

	</body>
	
</html>
 

