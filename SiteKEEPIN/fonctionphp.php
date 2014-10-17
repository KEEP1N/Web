<<<<<<< HEAD
<?php   
=======
<?php
<<<<<<< HEAD
   	$serveur='192..168.56.101'; //A changer à chaque fois pour chaque personne
   	$username='root';
	$password='toor';
   	$databasename='Keepin';
=======
   $serveur='127.0.0.1'; //A changer à chaque fois pour chaque personne
   $username='root';

   $password='toor';
   $databasename='K
   eepin';

   $password='';
   $databasename='Keepin';
>>>>>>> d1674bc72475b547d9e9402ed93376218041d15d

   
   $idconn=mysqli_connect($serveur,$username,$password);
   if (mysqli_errno($idconn)){
   		print(mysqli_error($idconn));}
   $select_database=mysqli_select_db($idconn,$databasename);

   
>>>>>>> origin/master
   function User_name(){
   		global $idconn;
		$SQLQuery='select empl_nom,empl_prenom from employe';
		$SQLResult=mysqli_query($idconn,$SQLQuery);
		$SQLRow=mysqli_fetch_array($SQLResult);
		return($SQLRow['empl_nom'].' '.$SQLRow['empl_prenom']);
   }
?>
