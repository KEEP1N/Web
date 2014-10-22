<?php
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
?>
<!DOCTYPE html>
<html>
	
	<body>
	
		<section class=paragraphe>
		
			<label for ="pseudo">Pseudo :</label> <input type="text" name="pseudo" id="pseudo" /></br>
			<label for="mdp">Mot de passe : </label><input type="text" name="mdp" /></br>
			<a href="MDPOublie.php" id="mdpoublie">Mot de passe oublié?</a><br/>
			<input type="submit" id="submit" value="Valider"/>
	
		</section>

	</body>
	
</html>