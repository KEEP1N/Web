<?php
include 'db.php';
function supprimer(){
    GLOBAL $idconn;
    if(!empty($_POST)==true){
        if(isset($_GET['id'])){
            $SQLQuerySuppr = "DELETE FROM employe WHERE empl_ID =".$_REQUEST['id'];
            $SQLResult = mysqli_query($idconn, $SQLQuerySuppr);
            ?>
            <body>
                <script type="text/javascript">
                    alert('Le compte a bien été supprimé.'); document.location.href = 'AccueilAdmin.php'; 
                </script>
            </body>
            <?php
        }
    }
}



