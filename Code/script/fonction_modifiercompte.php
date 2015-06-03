<?php
include 'db.php';
// Déroulant Role:
$SQLQueryRoleEmpl = 'SELECT ro_ID FROM role INNER JOIN employe ON ro_ID = empl_ro_ID WHERE empl_ID ='.$_REQUEST['id'];
$SQLResultRoleEmpl = mysqli_query($idconn, $SQLQueryRoleEmpl);
$SQLRowRol = mysqli_fetch_array($SQLResultRoleEmpl);
$idRole = $SQLRowRol['ro_ID'];
mysqli_free_result($SQLResultRoleEmpl);


$SQLQueryRole = 'SELECT * FROM role';
$SQLResultRole = mysqli_query($idconn, $SQLQueryRole);
$form_role = '<select name="role" id="role">';
		
while ($SQLRow = mysqli_fetch_array ($SQLResultRole)){
	if($SQLRow['ro_ID'] == $idRole){
		$form_role .= '<option selected="selected" value="'.$SQLRow['ro_ID'].'">'.utf8_encode($SQLRow['ro_libelle']).'</option>';
	}else{
		$form_role .= '<option value="'.$SQLRow['ro_ID'].'">'.utf8_encode($SQLRow['ro_libelle']).'</option>';
	}
}
$form_role .= '</select>';
mysqli_free_result($SQLResultRole);


//ComboBox de SERVICE, présélectionné par le service auquel appartient l'employé
	$form_serv="";
	$SQLQueryServEmpl = 'SELECT serv_ID FROM service INNER JOIN poste ON post_serv_ID = serv_ID INNER JOIN employe ON empl_post_ID = post_ID WHERE empl_ID ='.$_REQUEST['id'];
	$SQLResultServEmpl = mysqli_query($idconn, $SQLQueryServEmpl);
	$SQLRowEmpl = mysqli_fetch_array($SQLResultServEmpl);
	$idServ = $SQLRowEmpl['serv_ID'];
	mysqli_free_result($SQLResultServEmpl);
	
	$SQLQueryServ = 'SELECT * FROM service';
	$SQLResultServ = mysqli_query($idconn, $SQLQueryServ);
	
	while ($SQLRow = mysqli_fetch_array ($SQLResultServ)){
		if($SQLRow['serv_ID'] == $idServ){
		$form_serv .= '<option selected="selected" value="'.$SQLRow['serv_ID'].'">'.utf8_encode($SQLRow['serv_libelle']).'</option>';
		}else{
		$form_serv .= '<option value="'.$SQLRow['serv_ID'].'">'.utf8_encode($SQLRow['serv_libelle']).'</option>';
		}
	}
	mysqli_free_result($SQLResultServ);


//ComboBox de POSTE, présélectionné par le poste auquel appartient l'employé mais qui change si l'utilisateur sélectionne un autre service.
	$form_post ="";
	/*if(isset($_POST["idService"]) and isset($_POST["poste"])){
		$SQLQueryPost = "SELECT * FROM poste WHERE post_serv_ID=".$_POST["idService"]." ORDER BY post_libelle";
		$SQLResultPost = mysqli_query($idconn, $SQLQueryPost);

		while ($SQLRow = mysqli_fetch_array ($SQLResultPost)){
			$form_post .= '<option value="'.$SQLRow['post_ID'].'">'.utf8_encode($SQLRow['post_libelle']).'</option>';
		}
		mysqli_free_result($SQLResultPost);
	}else{*/
		$SQLQueryPostEmpl = 'SELECT post_ID FROM poste INNER JOIN employe ON empl_post_ID = post_ID WHERE empl_ID ='.$_REQUEST['id'];
		$SQLResultPostEmpl = mysqli_query($idconn, $SQLQueryPostEmpl);
		$SQLRowPost = mysqli_fetch_array($SQLResultPostEmpl);
		$idPoste = $SQLRowPost['post_ID'];
		mysqli_free_result($SQLResultPostEmpl);
		
		$SQLQueryPost = 'SELECT * FROM poste WHERE post_serv_ID ='.$idServ;
		$SQLResultPost = mysqli_query($idconn, $SQLQueryPost);
		
		while ($SQLRow = mysqli_fetch_array ($SQLResultPost)){
			if($SQLRow['post_ID'] == $idPoste){
			$form_post .= '<option selected="selected" value="'.$SQLRow['post_ID'].'">'.utf8_encode($SQLRow['post_libelle']).'</option>';
			}else{
			$form_post .= '<option value="'.$SQLRow['post_ID'].'">'.utf8_encode($SQLRow['post_libelle']).'</option>';
			}
		}
		mysqli_free_result($SQLResultPost);
		
		
	

//ComboBox de Niveau, présélectionné par le niveau auquel appartient l'employé mais qui change si l'utilisateur sélectionne un autre service.
	$form_niv = '';
	if(isset($_POST["idService"]) and isset($_POST["niveau"])){
		$SQLQueryNiv = "SELECT * FROM niveau WHERE niv_serv_ID=".$_POST["idService"]." ORDER BY niv_libelle";
		$SQLResultNiv = mysqli_query($idconn, $SQLQueryNiv);
		
		while ($SQLRow = mysqli_fetch_array ($SQLResultNiv)){
			$form_niv .= '<option value="'.$SQLRow['niv_ID'].'">'.utf8_encode($SQLRow['niv_libelle']).'</option>';
		}
		mysqli_free_result($SQLResultNiv);
	}else{
	$SQLQueryNivEmpl = 'SELECT niv_ID FROM niveau INNER JOIN employe ON empl_niv_ID = niv_ID WHERE empl_ID ='.$_REQUEST['id'];
		$SQLResultNivEmpl = mysqli_query($idconn, $SQLQueryNivEmpl);
		$SQLRowNiv = mysqli_fetch_array($SQLResultNivEmpl);
		$idNiv = $SQLRowNiv['niv_ID'];
		mysqli_free_result($SQLResultNivEmpl);
		
		$SQLQueryNiv = 'SELECT * FROM niveau WHERE niv_serv_ID ='.$idServ;
		$SQLResultNiv = mysqli_query($idconn, $SQLQueryNiv);
		
		while ($SQLRow = mysqli_fetch_array ($SQLResultNiv)){
			if($SQLRow['niv_ID'] == $idNiv){
			$form_niv .= '<option selected="selected" value="'.$SQLRow['niv_ID'].'">'.utf8_encode($SQLRow['niv_libelle']).'</option>';
			}else{
			$form_niv .= '<option value="'.$SQLRow['niv_ID'].'">'.utf8_encode($SQLRow['niv_libelle']).'</option>';
			}
		}
		mysqli_free_result($SQLResultNiv);
	}

// On initialise les variables
$nom = utf8_encode($SQLRow['empl_nom']);
$prenom = utf8_encode($SQLRow['empl_prenom']);
$ddn = utf8_encode($SQLRow['empl_DDN']);
$matricule = utf8_encode($SQLRow['empl_matricule']);
$poste = utf8_encode($SQLRow['empl_post_ID']);
$niveau = utf8_encode($SQLRow['empl_niv_ID']);
$role = utf8_encode($SQLRow['empl_ro_ID']);
$tel = utf8_encode($SQLRow['empl_tel']);
$email = utf8_encode($SQLRow['empl_mail']);
$mdp = utf8_encode($SQLRow['empl_password']);
$codepin = utf8_encode($SQLRow['empl_codePin']);
$form_entreprise = utf8_encode($SQLRow['empl_entr_numsiret']);

	
// Déroulant Entreprise
$SQLQueryEntr = 'SELECT * FROM entreprise';
$SQLResultEntr = mysqli_query($idconn, $SQLQueryEntr);
$form_entreprise = '<select name="entreprise" id="entreprise">';
			
while ($SQLRow = mysqli_fetch_array ($SQLResultEntr)){
	$form_entreprise .= '<option value="'.$SQLRow['entr_numsiret'].'">'.utf8_encode($SQLRow['entr_nom']).'</option>';
}
$form_entreprise .= '</select>';
mysqli_free_result($SQLResultEntr);


function modification(){
	GLOBAL $idconn;
	if(empty($_POST)==true){
		$nom = "";
		$prenom = "";
		$ddn = "";
		$matricule = "";
		$poste = "";
		$tel = "";
		$email = "";
		$mdp = "";
		$codepin = "";
		$service = "";
		$role = "";
		$niveau = "";
		$codepin = "";
		$entreprise = "";

	}else{
		$nom = utf8_decode(mysql_real_escape_string(trim($_POST['nom'])));
		$prenom = utf8_decode(mysql_real_escape_string(trim($_POST['prenom'])));
		$ddn = dateus($_POST['ddn']);
		$matricule = utf8_decode(mysql_real_escape_string(trim($_POST['matricule'])));
		$poste = $_POST['poste'];
		$tel = utf8_decode(mysql_real_escape_string(trim($_POST['tel'])));
		$email = utf8_decode($_POST['mail']);
		$codepin = utf8_decode($_POST['codepin']);
		$role = $_POST['role'];
		$niveau = $_POST['niveau'];
		$entreprise = $_POST['entreprise'];
		
		
		$SQLQueryMail = "SELECT * FROM employe WHERE empl_mail='$email' AND empl_ID !=".$_REQUEST['id'];
		$SQLResultMail=mysqli_query($idconn, $SQLQueryMail);		
		if(mysqli_num_rows($SQLResultMail)==1){
			print('Cet e-mail existe déjà dans notre base de données. Veuillez recommencer s\'il vous plaît.');
		}else{
			$SQLQueryModif = "UPDATE employe SET empl_matricule = '$matricule', empl_nom = '$nom', empl_prenom = '$prenom' , empl_DDN = '$ddn' , empl_mail = '$email'";
			$SQLQueryModif .= " , empl_codePin = '$codepin' , empl_tel = '$tel' , empl_ro_ID = $role, empl_post_ID = $poste, empl_entr_numsiret = '$entreprise', empl_niv_ID = $niveau";
			$SQLQueryModif .= " WHERE empl_ID =".$_REQUEST['id'];
			$SQLResult = mysqli_query($idconn, $SQLQueryModif);
			?>
	<body>
		<script type="text/javascript">
			alert('Félicitations, le compte a été modifié !'); document.location.href = 'AccueilAdmin.php'; 
		</script>
	</body>
			<?php
		}
		

	}
	
}

?>