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
	
			<h1 style="margin-left: 80px">Historique de passage</h1>
			
			
			
			<?php
			
			GLOBAL $idconn;
			$SQLQueryHisto = "SELECT empl_nom, empl_prenom, dev_heure, dev_dateJour, port_libelle FROM employe INNER JOIN posseder ON empl_ID = poss_empl_id INNER JOIN acces ON poss_acc_id = acc_ID INNER JOIN deverrouiller ON acc_ID = dev_acc_ID INNER JOIN porte ON dev_port_ID = port_ID";
			$SQLResult = mysqli_query($idconn, $SQLQueryHisto);
			$script = '<table style="margin-right: 170px">'.'<tr><th>'.'Nom'.'</th>'.'<th>'.'Prénom'.'</th>'.'<th>'.'Porte'.'</th>'.'<th>'.'Date'.'</th>'.'<th>'."Heure".'</th></tr>';
			
			$list1[] = array("Nom", "Prénom", "Porte", "Date", "Heure"); 
			while ($SQLRow = mysqli_fetch_array ($SQLResult)){
			$script .= '<tr><td>'.utf8_encode($SQLRow['empl_nom']).'</td>'.'<td>'.utf8_encode($SQLRow['empl_prenom']).'</td>';
			$script .= '<td>'.utf8_encode($SQLRow['port_libelle']).'</td>'.'<td>'.utf8_encode($SQLRow['dev_dateJour']).'</td>';
			$script .= '<td>'.$SQLRow['dev_heure'].'</td></tr>';
			$list1[] = array(utf8_encode($SQLRow['empl_nom']),utf8_encode($SQLRow['empl_prenom']),utf8_encode($SQLRow['port_libelle']),utf8_encode($SQLRow['dev_dateJour']),$SQLRow['dev_heure']);
			
			}
			
			$script .= '</table>';
			print($script);
			
		
			// Fonction pour exporter en CSV, pas encore correcte donc à modifier quand on aura le temps
			/*function ouvrir(){
			GLOBAL $list1;
			$fp = fopen("export1.csv", "w");
			foreach($list1 as $fields):
				fputcsv($fp, $fields);
			endforeach;
			fclose($fp);
			}*/
			
			mysqli_free_result($SQLResult);
			?>
			
			<a href = "AccueilAdmin.php"><input type="button" id="retour" value=""/></a>
			<!--<input type="button" value="Exporter en CSV" onclick = <?php ouvrir() ?>/>-->

		</section>
		
		<?php endif;?>
	
	</body>
	
</html>