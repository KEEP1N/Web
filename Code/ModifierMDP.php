<?php
	session_start();
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
        include 'script/fonction_verification.php';
        include 'script/fonction_mdp.php';
        
        if(empty($_SESSION['empl_ID'])) {
           header('Location:index.php');
        }
?>
<<<<<<< HEAD
		<?php
			if (isset($_SESSION['empl_mail']) && $_SESSION['empl_ro_ID']==1) :
		?>

    
		<section class="paragraphe">
	
			<h1> Changement de mot de passe</h1>

                        <form method="post" action="ModifierMDP.php" onsubmit ="return verifForm(this)">
			<label for="lastmdp">Ancien mot de passe: </label><br/><input type="password" onblur="verifChamp(this)" name="lastmdp" /><br/>
			<label for="newmdp">Nouveau mot de passe: </label><br/><input type="password" onblur="verifChamp(this)" name="newmdp" /><br/>
			<label for="newmdp">Confirmation du nouveau mot de passe:</label><br/><input type="password" onblur="verifChamp(this)" name="newmdp2" /><br/>
=======
                        <form method="post" action="#">
			<label for="lastmdp">Ancien mot de passe: </label><input type="text" name="lastmdp" /><br/>
			<label for="newmdp">Nouveau mot de passe: </label><br/><input type="text" name="newmdp" /><br/>
			<label for="newmdp">Confirmation du nouveau mot de passe:</label><br/><input type="text" name="newmdp2" /><br/>

			
                        <a href = "AccueilMonCompte.php"><input type="button" id="retour" value=""/></a>
			<input type="submit" id="submit" name="validation" value="Modifier"/>
=======
		<section class="paragraphe">
                    <h1> Changement de mot de passe</h1>
                        <form method="post" action="ModifierMDP.php" name="formulaire" onsubmit ="return verifMDP(this)">
                            <label for="lastmdp">Ancien mot de passe: </label>
                            <input type="password" name="lastmdp" id="lastmdp" onblur="verifChamp(this)" /><br/>
                            <label for="newmdp">Nouveau mot de passe: </label><br/>
                            <input type="password" name="newmdp" id="newmdp" onblur="verifChamp(this)"/><br/>
                            <label for="newmdp">Confirmation du nouveau mot de passe:</label><br/>
                            <input type="password" name="newmdp2" id="newmdp2" onblur="verifChamp(this)" /><br/>
                            
                            <div id="message"><?php modifMDP(); ?></div>
                            
                            <a href = "AccueilMonCompte.php"><input type="button" id="retour" value=""/></a>
                            <input type="submit" id="submit" name="validation" value="Modifier"/>
                            
>>>>>>> 6563bd97d150c8bad517430cf4058f1cd333068d
                        </form>
		</section>
		<?php endif;?>
                
	</body>
	
</html>