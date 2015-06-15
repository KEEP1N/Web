            <?php
            session_start();
            include'script/fonctionphp.php';
            include'script/db.php';
            include 'basehtml.php';
            include 'script/fonction_creationcompte.php';
            include 'script/fonction_verification.php';

            if(empty($_SESSION['empl_ID'])){
                header('Location:index.php');
            }else if(isset($_SESSION['empl_mail']) && $_SESSION['empl_ro_ID']==2):
            ?>
                <script type="text/javascript">
                    function getXhr(){
                        var xhr = null; 
                        if(window.XMLHttpRequest) // Firefox et autres
                           xhr = new XMLHttpRequest(); 
                        else if(window.ActiveXObject){ // Internet Explorer 
                           try {
                                xhr = new ActiveXObject("Msxml2.XMLHTTP");
                            }catch (e) {
                              xhr = new ActiveXObject("Microsoft.XMLHTTP");
                            }
                        }
                        else{ // XMLHttpRequest non supporté par le navigateur 
                           alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
                           xhr = false; 
                        } 
                        return xhr;
                    }


                    // Méthode qui sera appelée sur le click du bouton
                    function goPoste(){
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
                        xhr.send("idService="+idservice + '&poste=1');
                    }

                    function goNiveau(){
                        var xhr = getXhr();
                        // On défini ce qu'on va faire quand on aura la réponse
                        xhr.onreadystatechange = function(){
                        // On ne fait quelque chose que si on a tout reçu et que le serveur est ok
                            if(xhr.readyState == 4 && xhr.status == 200){
                                    leselect = xhr.responseText;
                                    // On se sert de innerHTML pour rajouter les options a la liste
                                    document.getElementById('niveau').innerHTML = leselect;
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
                        xhr.send("idService="+idservice + '&niveau=1');
                    }

            </script>

            <section class='paragraphe'>

                <h1>Création d'un compte</h1>
                <form method="post" action="CreationCompte.php" name="formulaire" onsubmit ="return verifFormAjout(this)">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" onblur="verifChamp(this)" value="<?php print($nom);?>"/><br/>
                    <label for ="prenom">Prenom :</label>
                    <input type="text" name="prenom" id="prenom" onblur="verifChamp(this)" value="<?php print($prenom);?>"/><br/>
                    <label for ="ddn">Date de Naissance :</label>
                    <input type="text" name="ddn" id="ddn" onblur="verifDate(this)" value="<?php print($ddn);?>"/><br/>
                    <label for ="matricule">Matricule :</label>
                    <input type="text" name="matricule" id="matricule" value="<?php print($matricule);?>" /><br/>
                    <label for ="entreprise">Entreprise: </label><?php print($form_entreprise)?><br/>
                    <label>Service:</label>
                    <select name='service' id='service' onchange='goNiveau();goPoste()'>
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
                    <label for="niveau">Niveau :</label>
                    <div id='selectniv' style='display:inline'>
                            <select name='niveau' id='niveau' onblur="verifChamp(this)">
                                    <option value=''>Choisir un service</option>
                                    <?php print($form_niv)?>
                            </select>
                    </div><br/>
                    <label for="tel">Téléphone: </label>
                    <input type="text" name="tel" id="tel" onblur="verifTel(this)" value="<?php print($tel);?>" /><br/>
                    <label for ="email">Adresse e-mail :</label>
                    <input type="text" name="email" id="email" onblur="verifMail(this)" value="<?php print($email);?>" /><br/>
                    <label for ="mdp">Mot de Passe :</label>
                    <input type="password" name="mdp" id="mdp" onblur="verifChamp(this)" value="<?php print($mdp);?>" /><br/>
                    <label for ="codepin">Code PIN :</label>
                    <input type="text" name="codepin" id="codepin" onblur="verifChamp(this)" value="<?php print($codepin);?>" /><br/>
                    <label for="role">Rôle :</label><?php print($form_role); ?><br/>

                    <div id="message"><strong><?php inscription(); ?></strong></div>

                    <a href = "AccueilAdmin.php"><input type="button" id="retour" value=""/></a>
                    <input type="submit" id='submit' value="Valider"/>
                    <input type="reset" id='reset' value="Annuler"/>
                </form>

            </section>
            <?php 
            endif;
            ?>
    </body>
</html>