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
		//var mdpOK = verifChamp(f.mdp);
		var codepinOK = verifChamp(f.codepin);
		var prenomOK = verifChamp(f.prenom);
		var posteOK = document.getElementById("poste").value;
		var telOK = verifTel(f.tel);
		
		
		
		if(nomOK && codepinOK && prenomOK)
		{
			if(!dateOK)
			{
                            alert("La date de naissance n'est pas valide (jj/mm/aaaa).");
                            return false;
			}else if(!mailOK){
                            alert("L'e-mail n'est pas valide.");
				return false;
			//}else if(typeof mdpOK != "undefined"){  // Si la variable mdpOK existe et qu'elle n'est pas définie alors:
                           // alert("Veuillez entrer un mot de passe.");
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
			
</script>

