<?php
include "script/db.php";

function modifMDP(){
    GLOBAL $idconn;
    if(isset($_POST['validation'])){
        $SQLInfo = "SELECT * FROM employe WHERE empl_ID =".$_SESSION['empl_ID'];
        $ResultInfo = mysqli_query($idconn, $SQLInfo);
        $Colonne = mysqli_fetch_array($ResultInfo);
        if(md5($_POST['lastmdp'])== $Colonne['empl_password']){
            if($_POST['newmdp'] == $_POST['newmdp2']){
                $SQLModifMDP = "UPDATE employe SET empl_password ='".md5($_POST['newmdp'])."' WHERE empl_ID=".$_SESSION['empl_ID'];
                $ResultModifMDP = mysqli_query($idconn, $SQLModifMDP);
                ?>
                <body>
                    <script type="text/javascript">
                        alert('Félicitations, votre mot de passe a bien été modifié.');
                        document.location.href = 'AccueilMonCompte.php'; 
                    </script>
                </body>
                <?php
            }else{
                ?>
                <body>
                    <script type="text/javascript">
                        alert('Vos deux mots de passe ne correspondent pas.');
                    </script>
                </body>
                <?php
            }
        }else{
            ?>
            <body>
                <script type="text/javascript">
                    alert('Votre ancien mot de passe n\'est pas correct.');
                </script>
            </body>
            <?php
        }
    }
}

