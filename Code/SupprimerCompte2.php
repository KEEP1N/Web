<?php
	session_start();
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
        include 'script/fonction_supprimercompte.php';
        
        if(empty($_SESSION['empl_ID'])) {
        header('Location:index.php');}
?>
<?php
if (isset($_SESSION['empl_mail']) && $_SESSION['empl_ro_ID']==2) :
?>


<?php
function afficherDetails(){
	GLOBAL $idconn;
	GLOBAL $form_serv;
	GLOBAL $form_post;
	GLOBAL $form_niv;
	GLOBAL $form_entreprise;
	GLOBAL $form_role;
	GLOBAL $nom;
	$SQLQuery = "SELECT * FROM employe INNER JOIN poste ON empl_post_ID = post_ID INNER JOIN service ON post_serv_ID = serv_ID INNER JOIN entreprise ON entr_numsiret = empl_entr_numsiret";
	$SQLQuery .= " INNER JOIN niveau ON empl_niv_ID = niv_ID INNER JOIN role ON ro_ID = empl_ro_ID WHERE empl_ID =".$_GET['id'];
	$SQLResult = mysqli_query($idconn, $SQLQuery);
	$script="";
	while ($SQLRow = mysqli_fetch_array($SQLResult))
	{
		$script .= "<label for='Nom'>Nom :</label><input type='text' id='nom' name='nom' readonly='true' value = '".utf8_encode($SQLRow['empl_nom'])."'/><br/>";
		$script .= "<label for='Prenom'>Prénom :</label><input type='text' id='prenom' name='prenom' readonly='true' value = '".utf8_encode($SQLRow['empl_prenom'])."'/><br/>";
		$script .= "<label for ='ddn'>Date de Naissance :</label><input type='text' id='ddn' name='ddn' readonly='true' value = '".datefr($SQLRow['empl_DDN'])."'/><br/>";
		$script .= "<label for ='matricule'>Matricule :</label><input type='text' id='matricule' name='matricule' readonly='true' value = '".utf8_encode($SQLRow['empl_matricule'])."'/><br/>";
		$script .= "<label for ='entreprise'>Entreprise: </label><input type='text' id='entreprise' name='entreprise' readonly='true' value = '".addslashes(utf8_encode($SQLRow['entr_nom']))."'/><br/>";
		$script .= "<label for ='Service'>Service :</label><input type='text' id='service' name='service' readonly='true' value = '".utf8_encode($SQLRow['serv_libelle'])."'/><br/>";
		$script .= "<label for ='Poste'>Poste :</label><input type='text' id='poste' name='poste' readonly='true' value = '".utf8_encode($SQLRow['post_libelle'])."'/><br/>";
		$script .= "<label for='niveau'>Niveau :</label><input type='text' id='niveau' name='niveau' readonly='true' value = '".utf8_encode($SQLRow['niv_libelle'])."'/><br/>";
		$script .= "<label for='tel'>Téléphone: </label><input type='text' id='tel' name='tel' readonly='true' value = '".utf8_encode($SQLRow['empl_tel'])."'/><br/>";
		$script .= "<label for ='mail'>Adresse e-mail :</label><input type='text' id='mail' name='mail' readonly='true' value = '".utf8_encode($SQLRow['empl_mail'])."'/><br/>";
		$script .= "<label for ='codepin'>Code Pin :</label><input type='text' id='codepin' name='codepin' readonly='true' value = '".utf8_encode($SQLRow['empl_codePin'])."'/><br/>";
		$script .= "<label for='role'>Rôle :</label><input type='text' id='role' name='role' readonly='true' value = '".utf8_encode($SQLRow['ro_libelle'])."'/><br/>";
		
	}
	echo($script);
}

?>
		<section class="paragraphe">
	
			<h1>Supprimer un compte</h1>
			
			<?php
			$lien = "SupprimerCompte2.php?id=".$_GET['id'];
                        //$lien;
			?>
                        <form method='post' action='<?php $lien; ?>' name='formulaire' onsubmit="return confirm('Êtes-vous certain(e) de vouloir supprimer ce compte?')">
			<?php afficherDetails(); ?>
			<a href = "SupprimerCompte1.php"><input type="button" id="retour" value=""/></a>
                        <div id="message"><strong><?php supprimer(); ?></strong></div>
                        <input type="submit" id="submit" value="Supprimer"/>
			
			</form>
	
		</section>
		<?php endif;?>

	</body>
	
</html>