<?php
   $serveur='192.168.56.101';
   $username='root';
   $password='toor';
   $databasename='Keepin';
   
   $idconn=mysqli_connect($serveur,$username,$password);
   $select_database=mysqli_select_db($idconn,$databasename);
   
   function User_name(){
   	global $idconn;
	$SQLQuery='select empl_'
   }
?>