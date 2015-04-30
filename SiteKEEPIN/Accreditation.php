<?php
	session_start();
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
        
                        if(empty($_SESSION['empl_ID'])) {
                    header('Location:index.php');
                        }//elseif(isset($_SESSION['empl_mail']) && $_SESSION['empl_ro_ID']==1){
                                //header('Location:AccueilMonCompte.php');

            
       
        
?>

<!DOCTYPE html>
<html>

	<body>
		<?php
			if (isset($_SESSION['empl_mail']) && $_SESSION['empl_ro_ID']==1) :
		?>

		<section class="paragraphe" id = "credit">
		
			<h1 style="margin-left:80px">Demande d'accréditation</h1>
			<label for ="date">Durée: </label> <br/>
			<select name="date" id="date"><br/>
				<option value="1">1 jours</option>
				<option value="2">2 jours</option>
				<option value="3">3 jours</option>
			</select><br/>
			<label for ="porte">Porte: </label> <br/>
				<select name="porte" id="porte"><br/>
				<option value="porte1">A008</option>
				<option value="porte2">B105</option>
				<option value="porte3">K556</option>
			</select><br/>
			<p style="font-variant:normal">Renseigner le motif de votre demande:</p>
			<textarea name ="textMulti"></textarea>
			<a href = "AccueilMonCompte.php"><input type="button" id="retour" value=""/></a>
			<a href = "AccueilMonCompte.php"><input type="button" name="envoyer" value = "Envoyer" id="envoyer"; onclick="alert('Félicitations! Votre e-mail a été envoyé ! Vous receverez une réponse dès que possible.')"/></a>
			
		</section>
		
		<?php endif;?>

	</body>
	
</html>
 

