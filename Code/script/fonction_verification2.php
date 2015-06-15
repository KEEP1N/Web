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
        
        function verifForm(f)
	{
			
		var ancienpassOK = verifChamp(f.lastmdp);
		var nouveaupassOK = verifChamp(f.newmdp);
                var confirmpassOK = verifCahmp(f.newmdp2);
                
                if(ancienpassOK && nouveaupassOK && confirmpassOK)
		{
			if(ancienpassOK =="")
			{
                            alert("veuillez entrez votre ancien Mot de Passe ");
                            return false;
			}else if(nouveaupassOK ==""){
                            alert("Entrez un nouveau Mot de Passe");
				return false;
			//}else if(typeof mdpOK != "undefined"){  // Si la variable mdpOK existe et qu'elle n'est pas définie alors:
                           // alert("Veuillez entrer un mot de passe.");
			}else if(confirmpassOK==""){
				alert("Merci de confirmer votre nouveau Mot de Passe");
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