<?php
   $serveur='127.0.0.1'; //A changer à chaque fois pour chaque personne
   $username='root';
<<<<<<< HEAD
   $password='toor';
   $databasename='K
   eepin';
=======
   $password='';
   $databasename='Keepin';
>>>>>>> 6e53df78a9d2fd09957a20c2ed603ace66bc1e5e
   
   $idconn=mysqli_connect($serveur,$username,$password);
   if (mysqli_errno($idconn)){
   		print(mysqli_error($idconn));}
   $select_database=mysqli_select_db($idconn,$databasename);

   
   function User_name(){
   		global $idconn;
		$SQLQuery='select empl_nom,empl_prenom from employe';
		$SQLResult=mysqli_query($idconn,$SQLQuery);
		$SQLRow=mysqli_fetch_array($SQLResult);
		return($SQLRow['empl_nom'].' '.$SQLRow['empl_prenom']);
   }
?>