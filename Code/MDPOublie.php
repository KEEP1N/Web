<?php
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
?>


	
		<section class=paragraphe>
		
			<h1 style="margin-left:80px"> Mot de passe oublié</h1>
			<label for="mail">Adresse e-mail: </label><input type="email" name="mail"/><br/>
			<a href = "Accueil.php"><input type="submit" id="submit" value="Valider"; onclick = "alert ('Vous allez recevoir votre mot de passe par e-mail')"/></a>
			
		</section>

	</body>
	
</html>