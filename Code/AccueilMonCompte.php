            ﻿<?php
            session_start();
            include'script/fonctionphp.php';
            include'script/db.php';
            include 'basehtml.php';

            if(empty($_SESSION['empl_ID'])) {
                header('Location:index.php');
            }else if(isset($_SESSION['empl_mail']) && $_SESSION['empl_ro_ID']==1):
            ?>
            <section class="paragraphe">
	
                <h1 style="margin-left: 145px">Mon compte</h1>
                <?php 
                MonCompte()
                ?>
                <a href = "HistoriqueUser.php?empl_ID=<?php echo $_SESSION['empl_ID'];?>"><input type="button" id = "button" name="consultermonhistorique" value="Consulter mon historique">
                <a href = "Accreditation.php?empl_ID=<?php echo $_SESSION['empl_ID']; ?>"><input type="button" id = "button" name="demandeaccreditations" value="Demande d'accréditations">
                <a href = "ModifierMDP.php"><input type="button" id = "button" name="changermdp" value="Changer son mot de passe">
		
            </section>
            <?php 
            endif;
            ?>

    </body>

</html>
 

