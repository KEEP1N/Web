<?php
	session_start();
	include'script/fonctionphp.php';
	include'script/db.php';
	include 'basehtml.php';
	include 'script/fonction_creationcompte.php';
?>

<!DOCTYPE html>
<html>

	<body>
	<script type="text/javascript">
		
			// Fonction pour changer la couleur des champs mal remplis
			function surligne(champ, erreur)
			{
				if(erreur)
				champ.style.border = "2px solid #a42424";
				else
				champ.style.border = "";
			}

			// Fonction pour vérifier chaque champs
			function verifChamp(champ)
			{
				if(champ.value!="")
				{
					surligne(champ, false);
					return true;
				}
				else
				{
					surligne(champ, true);
					return false;
				}
			}
			
			// Fonction pour vérifier l'adresse mail
			function verifMail(champ)
			{
				var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
					if(!regex.test(champ.value))
					{
						surligne(champ, true);
						return false;
					}
					else
					{
						surligne(champ, false);
						return true;
					}
			}
			
			function verifTel(champ)
			{
				var regex = /^((\+|00)33\s?|0)[1-9](\s?\d{2}){4}$/;
					if(!regex.test(champ.value))
					{
						surligne(champ, true);
						return false;
					}
					else
					{
						surligne(champ, false);
						return true;
					}
			}
			
			function verifDate(champ)
			{
				var regex = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;
				if(!regex.test(champ.value))
				{
					surligne(champ, true);
					return false;
				}
				else
				{
					surligne(champ, false);
					return true;
				}
				
			}
			
			function verifForm(f)
			{
				
				var nomOK = verifChamp(f.nom);
				var dateOK = verifDate(f.ddn);
				var mailOK = verifMail(f.email);
				var mdpOK = verifChamp(f.mdp);
				var codepinOK = verifChamp(f.codepin);
				var prenomOK = verifChamp(f.prenom);
				var posteOK = document.getElementById("poste").value;
				var telOK = verifTel(f.tel);
				
				if(nomOK && mdpOK && codepinOK && prenomOK)
				{
					if(!dateOK)
					{
						alert("La date de naissance n'est pas valide.");
						return false;
					}else if(!mailOK){
						alert("L'e-mail n'est pas valide.");
						return false;
					}else if(posteOK == ""){
						alert("Veuillez sélectionner un poste.");
						return false;
					}else if(!telOK){
						alert("Le numéro de téléphone n'est pas valide.");
						return false;
					}else{
						return true;
					}
				}else{
					alert("Veuillez remplir correctement tous les champs.");
					return false;
				}
			}
			
			
			
			
			function getXhr(){
                                var xhr = null; 
				if(window.XMLHttpRequest) // Firefox et autres
				   xhr = new XMLHttpRequest(); 
				else if(window.ActiveXObject){ // Internet Explorer 
				   try {
			                xhr = new ActiveXObject("Msxml2.XMLHTTP");
			            } catch (e) {
			                xhr = new ActiveXObject("Microsoft.XMLHTTP");
			            }
				}
				else { // XMLHttpRequest non supporté par le navigateur 
				   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
				   xhr = false; 
				} 
                                return xhr;
			}
 
			
			// Méthode qui sera appelée sur le click du bouton
			
			function go(){
				var xhr = getXhr();
				// On défini ce qu'on va faire quand on aura la réponse
				xhr.onreadystatechange = function(){
					// On ne fait quelque chose que si on a tout reçu et que le serveur est ok
					if(xhr.readyState == 4 && xhr.status == 200){
						leselect = xhr.responseText;
						// On se sert de innerHTML pour rajouter les options a la liste
						document.getElementById('poste').innerHTML = leselect;
					}
				}
 
				// Ici on va voir comment faire du post
				xhr.open("POST","script/fonction_creationcompte.php",true);
				// ne pas oublier ça pour le post
				xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
				// ne pas oublier de poster les arguments
				// ici, l'id du service
				sel = document.getElementById('service');
				idservice = sel.options[sel.selectedIndex].value;
				xhr.send("idService="+idservice);
			}
		</script>
	
		<section class='paragraphe'>
		
			<h1>Création d'un compte</h1>
			<form method="post" action="CreationCompte.php" name="formulaire" onsubmit ="return verifForm(this)">
			
			<label for="nom">Nom :</label>
			<input type="text" name="nom" id="nom" onblur="verifChamp(this)" value="<?php print($nom);?>"/></br>
			<label for ="prenom">Prenom :</label>
			<input type="text" name="prenom" id="prenom" onblur="verifChamp(this)" value="<?php print($prenom);?>"/><br/>
			<label for ="ddn">Date de Naissance :</label>
			<input type="date" name="ddn" id="ddn" onblur="verifDate(this)" value="<?php print($ddn);?>"/><br/>
			<label for ="matricule">Matricule :</label>
			<input type="text" name="matricule" id="matricule" value="<?php print($matricule);?>" /><br/>
			<label for ="entreprise">Entreprise: </label><?php print($form_entreprise)?><br/>
			<label>Service:</label>
			<select name='service' id='service' onchange='go()'>
				<option value='-1'>Aucun</option>
				<?php print($form_serv)?>
			</select><br/>
			<label>Poste:</label>
			<div id='selectpost' style='display:inline'>
				<select name='poste' id='poste' onblur="verifChamp(this)">
					<option value=''>Choisir un service</option>
					<?php print($form_post)?>
				</select>
			</div><br/>
			<label for="tel">Téléphone: </label>
			<input type="text" name="tel" id="tel" onblur="verifTel(this)" value="<?php print($tel);?>" /></br>
			<label for ="email">Adresse e-mail :</label>
			<input type="text" name="email"id="email" onblur="verifMail(this)" value="<?php print($email);?>" /><br/>
			<label for ="mdp">Mot de Passe :</label>
			<input type="password" name="mdp" id="mdp" onblur="verifChamp(this)" value="<?php print($mdp);?>" /><br/>
			<label for ="codepin">Code PIN :</label>
			<input type="text" name="codepin" id="codepin" onblur="verifChamp(this)" value="<?php print($codepin);?>" /><br/>
			<label for="role">Rôle :</label><?php print($form_role); ?><br/>
			<label for="niveau">Niveau :</label><?php print($form_niveau); ?><br/>
			
			<div id="message"><strong><?php inscription(); ?></strong></div>
			<input type="submit" id='submit' value="Valider"/>
			<a href = "AccueilAdmin.php"><input type="reset" id='reset' value="Annuler"/></a>
			</form>
		</section>

	</body>
	
</html>