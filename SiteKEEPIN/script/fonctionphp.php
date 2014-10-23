<?php
   function User_name(){
   		global $idconn;
		$SQLQuery='select empl_nom,empl_prenom from employe';
		$SQLResult=mysqli_query($idconn,$SQLQuery);
		$SQLRow=mysqli_fetch_array($SQLResult);
		return($SQLRow['empl_nom'].' '.$SQLRow['empl_prenom']);
   }
	
	
	/*function HistoriqueAdmin(){
		$SQLQuery = 'SELECT empl_nom, empl_prenom, serv_libelle, niv_libelle, post_libelle, port_libelle, dev_dateJour, dev_heure 
					 FROM service, niveau, employe INNER JOIN poste ON empl_post_ID = post_ID, deverouiller INNER JOIN porte ON porte_ID = dev_port_ID' ;
		$SQLResult = mysqli_query($idconn, $SQLQuery);
		$script = '<table>'.'<tr><th>'.'Nom'.'</th>'.'<th>'.'Prénom'.'</th>'.'<th>'.'Service'.'</th>'.'<th>'.'Poste'.'</th>'.'<th>'.'Salle'.'</th>'.'<th>'.'Date'.'</th>'.'<th>'.'Heure'.'</th></tr>';
		
		while ($SQLRow = mysqli_fetch_array ($SQLResult)){
			$script .= '<tr><td>'.utf8_encode($SQLRow['empl_nom']).'</td>'.'<td>'.utf8_encode($SQLRow['empl_prenom']).'</td>'.'<td>'.$SQLRow['serv_libelle'].'</td>';
			$script .= .'<td>'.$SQLRow['niv_libelle'].'</td>'.'<td>'.$SQLRow['post_libelle'].'</td>'.'<td>'.$SQLRow['port_libelle'].'</td>';
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
		
		
	
   	function dateheure() {
		$date = date("d-m-Y");
		$heure = date("H:i");
		print ("$date, $heure");
	}
?>
