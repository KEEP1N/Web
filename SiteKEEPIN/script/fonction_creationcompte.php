<?php
// ValidationExpression="^((\+|00)33\s?|0)[1-9](\s?\d{2}){4}$"
include 'db.php';
// Déroulant Role:
$SQLQueryRole = 'SELECT * FROM role';
$SQLResultRole = mysqli_query($idconn, $SQLQueryRole);
$form_role = '<select name="role" id="role">';
		
while ($SQLRow = mysqli_fetch_array ($SQLResultRole)){
	$form_role .= '<option value="'.$SQLRow['ro_ID'].'">'.utf8_encode($SQLRow['ro_libelle']).'</option>';
}
$form_role .= '</select>';
mysqli_free_result($SQLResultRole);



// Déroulant Service:
$SQLQueryServ = 'SELECT * FROM service';
$SQLResultServ = mysqli_query($idconn, $SQLQueryServ);
//$form_serv = '<select name="serv" id="serv">';
$form_serv="";
while ($SQLRow = mysqli_fetch_array ($SQLResultServ)){
	$form_serv .= '<option value="'.$SQLRow['serv_ID'].'">'.utf8_encode($SQLRow['serv_libelle']).'</option>';
}
//$form_serv .= '</select>';
mysqli_free_result($SQLResultServ);


//Déroulant Poste:
	$form_post = "<select name='poste' id='poste'>";
	if(isset($_POST["idService"])){
	
	
	$SQLQueryPost = "SELECT * FROM poste WHERE post_serv_ID=".$_POST["idService"]." ORDER BY post_libelle";
	$SQLResultPost = mysqli_query($idconn, $SQLQueryPost);
	
	while ($SQLRow = mysqli_fetch_array ($SQLResultPost)){
		$form_post .= '<option value="'.$SQLRow['post_ID'].'">'.utf8_encode($SQLRow['post_libelle']).'</option>';
	}
	print($form_post);
	mysqli_free_result($SQLResultPost);
	}
	$form_post .= "</select>";


// On initialise les variables
$nom = utf8_encode($SQLRow['empl_nom']);
$prenom = utf8_encode($SQLRow['empl_prenom']);
$ddn = utf8_encode($SQLRow['empl_DDN']);
$matricule = utf8_encode($SQLRow['empl_matricule']);
$poste = utf8_encode($SQLRow['empl_post_ID']);
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



// Déroulant Niveau
$SQLQueryNiv = 'SELECT * FROM niveau';
$SQLResultNiv = mysqli_query($idconn, $SQLQueryNiv);
$form_niveau = '<select name="niveau" id="niveau">';
			
while ($SQLRow = mysqli_fetch_array ($SQLResultNiv)){
	$form_niveau .= '<option value="'.$SQLRow['niv_ID'].'">'.utf8_encode($SQLRow['niv_libelle']).'</option>';
}
$form_niveau .= '</select>';
mysqli_free_result($SQLResultNiv);

// Fonction pour convertir la date entrée en français en date américaine pour MySQL
function dateus($ddn){
$split = explode("/",$ddn);
$annee = $split[2];
$mois = $split[1];
$jour = $split[0];
return "$annee"."/"."$mois"."/"."$jour";
}


function inscription(){
	GLOBAL $idconn;
	if(empty ($_POST)==true){
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
		$email = utf8_decode($_POST['email']);
		$mdp = md5(mysql_real_escape_string(trim($_POST['mdp'])));
		$codepin = utf8_decode($_POST['codepin']);
		$role = $_POST['role'];
		$niveau = $_POST['niveau'];
		$entreprise = $_POST['entreprise'];
		
		
		$SQLQueryMail = "SELECT * FROM employe WHERE empl_mail='$email'";
		$SQLResultMail=mysqli_query($idconn, $SQLQueryMail);		
		if(mysqli_num_rows($SQLResultMail)==1){
			print('Cet e-mail existe déjà dans notre base de données. Veuillez recommencer s\'il vous plaît.');
		}else{
			$SQLQueryAjout = "INSERT INTO employe (empl_matricule, empl_nom, empl_prenom, empl_DDN, empl_mail, empl_codePin, empl_password, empl_tel, empl_ro_ID, empl_post_ID, empl_entr_numsiret)";
			$SQLQueryAjout .= " VALUES ('$matricule','$nom','$prenom','$ddn','$email','$codepin','$mdp','$tel', $role, $poste, '$entreprise')";
			$SQLResult = mysqli_query($idconn, $SQLQueryAjout);
			?>
				<body><script type="text/javascript">alert('Félicitations, l\'inscription a bien été prise en compte.'); document.location.href = 'AccueilAdmin.php'; </script></body>";
			<?php
		}
		

	}
	
}

?>