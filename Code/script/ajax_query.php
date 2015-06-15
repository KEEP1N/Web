<?php
include'script/db.php';

GLOBAL $idconn;
//Partie non fonctionnelle pour le moment
//Déroulant Poste en fonction du Service
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

//Déroulant Niveau en fonction du Service
if(isset($_POST["idService"]) and isset($_POST["niveau"])){
    $SQLQueryNiv = "SELECT * FROM niveau WHERE niv_serv_ID=".$_POST["idService"]." ORDER BY niv_libelle";
    $SQLResultNiv = mysqli_query($idconn, $SQLQueryNiv);
    while ($SQLRow = mysqli_fetch_array ($SQLResultNiv)){
       $form_niv .= '<option value="'.$SQLRow['niv_ID'].'">'.utf8_encode($SQLRow['niv_libelle']).'</option>';
    }
    mysqli_free_result($SQLResultNiv);
}
?>