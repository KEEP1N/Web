<?php
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
?>

<?php
session_start();
function connexion(){
	GLOBAL $idconn;
	if (isset($_POST['submit'])){
		$email=$_POST['email'];
		$mdp=$_POST['mdp'];
		
		if($email && $mdp){
			$SQLQueryAuth = "SELECT * FROM employe WHERE empl_mail='$email'";
			$SQLResult=mysqli_query($idconn, $SQLQueryAuth);
			$Result=mysqli_fetch_array($SQLResult);		
			if(mysqli_num_rows($SQLResult)==1){
				if($Result['empl_password']==md5($mdp)){
                                        $_SESSION['empl_ID'] = $Result['empl_ID'];
					$_SESSION['empl_mail']=$email;
					$_SESSION['empl_ro_ID'] = $Result['empl_ro_ID'];
					if($Result['empl_ro_ID']==2)
					{
					header('Location: AccueilAdmin.php');
					}else if($Result['empl_ro_ID']==1){
					header('Location: AccueilMonCompte.php');
					}else{
					echo('Il y a eu une erreur lors de la connexion.');
					}
				}else{
					echo('Le mot de passe ne correspond pas.');
				}
			}else{
				echo('Le login ne correspond pas.');
			}
		}else{
			echo('Veuillez remplir correctement tous les champs.');
		}
	}
}

	if(isset($_GET['task'])){
	session_destroy();
	}

?>
<!DOCTYPE html>
<html>
	
	<body>	
		<section class="paragraphe">
		<form method="POST" action="index.php">
			<label for ="mail">Mail :</label> <input type="mail" name="email" id="email" value="<?php $email; ?>" /></br>
			<label for="mdp">Mot de passe : </label><input type="password" id="mdp" name="mdp" value="<?php $mdp; ?>" /></br>
			
			<div id="avertissement"><strong><?php connexion();?></strong></div>
			<input type="submit" id="submit" name="submit" value="Connexion"/>
		</form>
		</section>
	</body>
	
</html>