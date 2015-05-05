<?php
include'script/db.php';

$form_post1 ="";
if(isset($_POST["idService"]) and isset($_POST["poste"])){
		$SQLQueryPost = "SELECT * FROM poste WHERE post_serv_ID=".$_POST["idService"]." ORDER BY post_libelle";
		$SQLResultPost = mysqli_query($idconn, $SQLQueryPost);

		while ($SQLRow = mysqli_fetch_array ($SQLResultPost)){
			$form_post1 .= '<option value="'.$SQLRow['post_ID'].'">'.utf8_encode($SQLRow['post_libelle']).'</option>';
		}
		print($form_post1);
		mysqli_free_result($SQLResultPost);
		
}
?>