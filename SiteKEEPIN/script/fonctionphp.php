<?php
   function User_name(){
   		global $idconn;
		$SQLQuery='select empl_nom,empl_prenom from employe';
		$SQLResult=mysqli_query($idconn,$SQLQuery);
		$SQLRow=mysqli_fetch_array($SQLResult);
		return($SQLRow['empl_nom'].' '.$SQLRow['empl_prenom']);
   }
	
	
	/*function HistoriqueAdmin(){
		global $idconn;
		$SQLQuery = 'SELECT empl_nom, empl_prenom, serv_libelle, niv_libelle, post_libelle, port_libelle, dev_dateJour, dev_heure FROM poste INNER JOIN service ON post_serv_ID = serv_ID INNER JOIN employe ON post_ID = empl_post_IDINNER JOIN comporter ON comp_serv_ID = serv_ID INNER JOIN niveau ON comp_niv_ID = niv_IDINNER JOIN deverrouiller ON dev_niv_ID = niv_ID INNER JOIN porte ON dev_port_ID = port_ID';
		$SQLResult = mysqli_query($idconn, $SQLQuery);
		$script = '<table>'.'<tr><th>'.'Nom'.'</th>'.'<th>'.'Prénom'.'</th>'.'<th>'.'Service'.'</th>'.'<th>'.'Poste'.'</th>'.'<th>'.'Salle'.'</th>'.'<th>'.'Date'.'</th>'.'<th>'.'Heure'.'</th></tr>';
		
		while ($SQLRow = mysqli_fetch_array ($SQLResult)){
			$script .= '<tr><td>'.utf8_encode($SQLRow['empl_nom']).'</td>'.'<td>'.utf8_encode($SQLRow['empl_prenom']).'</td>'.'<td>'.$SQLRow['serv_libelle'].'</td>';
			$script .= '<td>'.$SQLRow['niv_libelle'].'</td>'.'<td>'.$SQLRow['post_libelle'].'</td>'.'<td>'.$SQLRow['port_libelle'].'</td>';
			$script .= '<td>'.$SQLRow['dev_dateJour'].'</td>'.'<td>'.$SQLRow['dev_heure'].'</td></tr>';
		}
		$script .= '</table>';
		print($script);
		mysqli_free_result($SQLResult);
		}
	*/
	
	
	
	function MonCompte(){
		global $idconn;
		$SQLQuery = 'SELECT empl_nom, empl_prenom, serv_libelle, post_libelle, empl_codePIN FROM poste INNER JOIN employe ON post_ID = empl_post_ID INNER JOIN service ON post_serv_ID = serv_ID' ;
		$SQLResult = mysqli_query($idconn, $SQLQuery);
		$script = '<table>'.'<tr><th>'.'Nom'.'</th>'.'<th>'.'Prénom'.'</th>'.'<th>'.'Service'.'</th>'.'<th>'.'Poste'.'</th>'.'<th>'."Code d'accés".'</th></tr>';
		
		while ($SQLRow = mysqli_fetch_array ($SQLResult)){
			$script .= '<tr><td>'.utf8_encode($SQLRow['empl_nom']).'</td>'.'<td>'.utf8_encode($SQLRow['empl_prenom']).'</td>';
			$script .= '<td>'.utf8_encode($SQLRow['serv_libelle']).'</td>'.'<td>'.utf8_encode($SQLRow['post_libelle']).'</td>';
			$script .= '<td>'.$SQLRow['empl_codePIN'].'</td></tr>';
		}
		$script .= '</table>';
		print($script);
		mysqli_free_result($SQLResult);
		}
		
		
		function AjoutCompte(){
		$nom = htmlentities($_POST['Nom']);
		$prenom = htmlentities($_POST['Prenom']);
		$ddn = htmlentities($_POST['Date_de_Naissance']);
		$matricule = htmlentities($_POST['Matricule']);
		$poste = htmlentities($_POST['Poste']);
		$tel = htmlentities($_POST['Tel']);
		$mail = htmlentities($_POST['mail']);
		$mdp = htmlentities($_POST['mdp']);
		$codepin = htmlentities($_POST['codepin']);
		$role = htmlentities($_POST['Role']);
		$acc = htmlentities($_POST['Accreditation']);
		
		$SQLQuery = 'INSERT INTO employe (empl_nom, empl_prenom, empl_DDN, empl_matricule, empl_poste_ID, empl_tel, empl_mail, empl_password, empl_codePIN, empl_ro_ID) value ($nom, $prenom, $ddn, $matricule, $poste, $tel, $mail, $mdp, $codepin, $role)'
	}
	
	
   	function dateheure() {
		$date = date("d-m-Y");
		$heure = date("H:i");
		print ("$date, $heure");
	}
	

?>
