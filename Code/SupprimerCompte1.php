<?php
session_start();
include'script/fonctionphp.php';
include'script/db.php';
include 'basehtml.php';

if(empty($_SESSION['empl_ID'])) {
        header('Location:index.php');}
?>


		<?php
		if (isset($_SESSION['empl_mail']) && $_SESSION['empl_ro_ID']==2) :
		?>
		
		<?php
		GLOBAL $idconn;
		if(empty ($_POST)==true){
		$recherche="";
		}else{
			$recherche = utf8_decode(mysql_real_escape_string(trim($_POST['search'])));
			$motclef = explode(" ", $recherche);
			$SQLQuerySearch = "SELECT empl_ID, empl_nom, empl_prenom, empl_mail FROM employe WHERE 1=1";
			
			foreach ($motclef as $mot)
			{
				$SQLQuerySearch .= " AND (empl_nom LIKE '%$mot%' OR empl_prenom LIKE '%$mot%')";
			}
			$SQLQuerySearch .= " ORDER BY empl_nom ASC, empl_prenom ASC";
			
			$SQLResult = mysqli_query($idconn, $SQLQuerySearch);
			$nb_resultats = mysqli_num_rows($SQLResult);
			}
		?>

	<form id="searchform" class="searchform" name="searchform" action="SupprimerCompte1.php" method="post">
		<section class="paragraphe">
			<h1>Supprimer un compte</h1>
			<p> Veuillez rentrer un nom et un prénom:</p>
			<input type="text" name="search" id="search" placeholder= "Recherche" value="<?php print($recherche);?>" />
			<input type="submit" id="submit" name="searchButton" value="Rechercher"/><br/>
			<?php
			if(isset($_POST['searchButton'])){
				GLOBAL $nb_resultats;
				if($nb_resultats != 0){
			?>
					<p>Résultat(s) de votre recherche: </p></div>
					<p>Nous avons trouvé <?php echo $nb_resultats; ?> résultat(s):</p>
					<?php
					$script = "<ul> ";
					while ($SQLRow = mysqli_fetch_array($SQLResult))
					{
						$script .=  "<a href=\"SupprimerCompte2.php?id=".$SQLRow['empl_ID']."\"><li>".utf8_encode($SQLRow['empl_nom'])." ".utf8_encode($SQLRow['empl_prenom'])." - ".utf8_encode($SQLRow['empl_mail'])."</a>";
					}
					$script.="</ul>";
					echo($script);
				}else{
				?>
					<h4>Résultat(s) de votre recherche: </h4></div>
					<h6>Désolée, aucun résultat ne correspond à votre recherche.</h6>
				<?php
				}
			}
			?>
			<a href = "AccueilAdmin.php"><input type="button" id="retour" value=""/></a>
		</section>
	</form>
	<?php endif;?>
	</body>
</html>