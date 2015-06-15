            <?php
            session_start();
            include'script/fonctionphp.php';
            include'script/db.php';
            include 'basehtml.php';

            if(empty($_SESSION['empl_ID'])) {
                header('Location:index.php');
            }else if (isset($_SESSION['empl_mail']) && $_SESSION['empl_ro_ID']==1) :
            ?>
	
                <section class="paragraphe">
                        <h1> Historique de <?php print(utf8_encode(User_name()));?></h1>
                        <?php 
                        GLOBAL $idconn;
                        $SQLQueryHisto = 'SELECT empl_nom, empl_prenom, dev_heure, dev_dateJour, port_libelle FROM employe INNER JOIN posseder ON empl_ID = poss_empl_id INNER JOIN acces ON poss_acc_id = acc_ID INNER JOIN deverrouiller ON acc_ID = dev_acc_ID INNER JOIN porte ON dev_port_ID = port_ID where empl_ID ='.$_SESSION['empl_ID'];
                        $SQLResult = mysqli_query($idconn, $SQLQueryHisto);
                        $script = '<table style="margin-right: 170px">'.'<tr><th>'.'Nom'.'</th>'.'<th>'.'Prénom'.'</th>'.'<th>'.'Porte'.'</th>'.'<th>'.'Date'.'</th>'.'<th>'."Heure".'</th></tr>';
                        $list1[] = array("Nom", "Prénom", "Porte", "Date", "Heure"); 
                        while ($SQLRow = mysqli_fetch_array ($SQLResult)){
                            $script .= '<tr><td>'.utf8_encode($SQLRow['empl_nom']).'</td>'.'<td>'.utf8_encode($SQLRow['empl_prenom']).'</td>';
                            $script .= '<td>'.utf8_encode($SQLRow['port_libelle']).'</td>'.'<td>'.utf8_encode($SQLRow['dev_dateJour']).'</td>';
                            $script .= '<td>'.$SQLRow['dev_heure'].'</td></tr>';
                            $list1[] = array(utf8_encode($SQLRow['empl_nom']),utf8_encode($SQLRow['empl_prenom']),utf8_encode($SQLRow['port_libelle']),utf8_encode($SQLRow['dev_dateJour']),$SQLRow['dev_heure']);
                        }
                        $script .= '</table>';
                        print($script);
                        ?>
                        
                        <a href = "AccueilMonCompte.php"><input type="button" id="retour" value=""/></a>
                </section>

            <?php
            endif;
            ?>
    </body>
</html>
 

