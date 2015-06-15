<?php
	session_start();
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
        
                if(empty($_SESSION['empl_ID'])) {
                    header('Location:index.php');
        }
?>


	
		<section class="paragraphe">
	
			<h1> Changement de mot de passe</h1>
                        <form method="post" action="#">
			<label for="lastmdp">Ancien mot de passe: </label><input type="text" name="lastmdp" /><br/>
			<label for="newmdp">Nouveau mot de passe: </label><br/><input type="text" name="newmdp" /><br/>
			<label for="newmdp">Confirmation du nouveau mot de passe:</label><br/><input type="text" name="newmdp2" /><br/>
			
                        <a href = "AccueilMonCompte.php"><input type="button" id="retour" value=""/></a>
			<input type="submit" id="submit" name="validation" value="Modifier" onclick="alert('Félicitations! Votre mot de passe a été changé.')"/>
                        </form>
                        <?php 
                    
                            if (isset($_POST['validation'])){
                                $sql = "select * from employe where empl_ID =". $_SESSION['empl_ID']."";
                                $req = mysqli_query($bdd, $sql);
                                $rlt = mysqli_fetch_assoc($req);
                                if (md5($_POST['lastmdp'])==$rlt['empl_password']){
                                    if ($_POST['newmdp'] == $_POST['newmdp2']){
                                        $sql2 = "update employe set empl_password ='".md5($_POST['newmdp'])."' where empl_ID=".$_SESSION['empl_ID']."";
                                        $req2 = mysqli_query($bdd, $sql2);
                                        
                                        header ("Location :#");
                                    }
                                }
                                    
                                    
                                
                            }
                        ?>
		</section>
		

	</body>
	
</html>