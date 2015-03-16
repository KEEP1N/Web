<?php
   function User_name(){
   		global $idconn;
		$SQLQuery='select empl_nom,empl_prenom from employe';
		$SQLResult=mysqli_query($idconn,$SQLQuery);
		$SQLRow=mysqli_fetch_array($SQLResult);
		return($SQLRow['empl_nom'].' '.$SQLRow['empl_prenom']);
   }

	
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
		

	
   	function dateheure() {
		$date = date("d-m-Y");
		$heure = date("H:i");
		print ("$date, $heure");
	}
	

?>
