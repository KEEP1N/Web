        <?php
                session_start();
                include'script/fonctionphp.php';
                include'script/db.php';
                include 'basehtml.php';
                include 'script/fonction_modifiercompte.php';
                include 'script/fonction_verification.php';
                include'script/ajax_query.php';

                if(empty($_SESSION['empl_ID'])) {
                header('Location:index.php');}
                
                else if (isset($_SESSION['empl_mail']) && $_SESSION['empl_ro_ID']==2) :
        ?>

                <script type="text/javascript">

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
                            xhr.open("POST","script/ajax_query.php",true);
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
                            xhr.open("POST","script/ajax_query.php",true);
                            // ne pas oublier ça pour le post
                            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                            // ne pas oublier de poster les arguments
                            // ici, l'id du service
                            sel = document.getElementById('service');
                            idservice = sel.options[sel.selectedIndex].value;
                            xhr.send("idService="+idservice + '&niveau=1');
                    }

                </script>

                <?php
                    function afficherDetails(){
                            GLOBAL $idconn;
                            GLOBAL $form_serv;
                            GLOBAL $form_post;
                            GLOBAL $form_niv;
                            GLOBAL $form_entreprise;
                            GLOBAL $form_role;
                            GLOBAL $nom;
                            $SQLQuery = "SELECT * FROM employe INNER JOIN poste ON empl_post_ID = post_ID INNER JOIN service ON post_serv_ID = serv_ID INNER JOIN entreprise ON entr_numsiret = empl_entr_numsiret where empl_ID =".$_GET['id'];
                            $SQLResult = mysqli_query($idconn, $SQLQuery);
                            $script="";
                            while ($SQLRow = mysqli_fetch_array($SQLResult))
                            {
                                    $script .= "<label for='nom'>Nom :</label><input type='text' name='nom' id='nom' onblur='verifChamp(this)' value='".utf8_encode($SQLRow['empl_nom'])."' /><br/>";
                                    $script .= "<label for='prenom'>Prénom :</label><input type='text' name='prenom' id='prenom' onblur='verifChamp(this)' value='".utf8_encode($SQLRow['empl_prenom'])."' /><br/>";
                                    $script .= "<label for ='ddn'>Date de Naissance :</label><input id='ddn' name='ddn' onblur='verifDate(this)' value='".datefr($SQLRow['empl_DDN'])."' /><br/>";
                                    $script .= "<label for ='matricule'>Matricule :</label><input type='text' name='matricule' id='matricule' value='".utf8_encode($SQLRow['empl_matricule'])."' /><br/>";
                                    $script .= "<label for ='entreprise'>Entreprise: </label>".$form_entreprise."<br/>";
                                    $script .= "<label for ='service'>Service :</label>
                                                            <select name='service' id='service' onchange='goNiveau();goPoste()'>
                                                                    ".$form_serv."
                                                            </select><br/>";

                                    $script .= "<label for ='poste'>Poste :</label>
                                                            <div id='selectpost' style='display:inline'>
                                                                    <select name='poste' id='poste' onblur='verifChamp(this)'>
                                                                            ".$form_post."
                                                                    </select>
                                                            </div><br/>";

                                    $script .= "<label for='niveau'>Niveau :</label>
                                                            <div id='selectniv' style='display:inline'>
                                                                    <select name='niveau' id='niveau' onblur='verifChamp(this)'>
                                                                                    ".$form_niv."
                                                                    </select>
                                                            </div><br/>";

                                    $script .= "<label for='tel'>Téléphone: </label><input type='text' name='tel' readonly='true' onblur='verifTel(this)' value='".utf8_decode($SQLRow['empl_tel'])."' /><br/>";
                                    $script .= "<label for ='mail'>Adresse e-mail :</label> <input type='text' name='mail' id='mail' onblur='verifMail(this)' value='".utf8_encode($SQLRow['empl_mail'])."' /><br/>";
                                    $script .= "<label for ='codepin'>Code Pin :</label> <input type='text' name='codepin' id='codepin' value='".utf8_encode($SQLRow['empl_codePin'])."' /><br/>";
                                    $script .= "<label for='role'>Rôle :</label>".$form_role."<br/>";

                            }
                        echo($script);
                    }

                ?>

                <section class="paragraphe">

                    <h1>Modifier un compte</h1>
                    <?php
                    $lien = "ModifierCompte2.php?id=".$_GET['id'];
                    ?>
                    <form method='post' action='<?php $lien; ?>' name='formulaire' onsubmit ='return verifFormModif(this)'>

                        <?php afficherDetails(); ?>

                        <div id="message"><strong><?php modification(); ?></strong></div>
                        <a href = "ModifierCompte1.php"><input type="button" id="retour" value=""/></a>
                        <input type="submit" id="submit" value="Modifier"/>
                        <input type="reset" id="reset" value="Annuler"/>

                    </form>

                </section>
            <?php 
                endif;
            ?>

        </body>

</html>