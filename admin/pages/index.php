<?php require '../../connexion/connexion.php';

include '../inc/nav.inc.php';
 ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    $sql = $pdoCV->query("SELECT * FROM t_titres_cv WHERE utilisateur_id='$id_utilisateur' ");
                    $ligne_titre = $sql->fetch();//va chercher sur une ligne!

                    ?>
                    <h1><strong><?= $ligne_titre['titre_cv']?></strong></h1>
                    <h2><?= $ligne_titre['accroche']?></h2>
                    <h3 class="page-header"><?= $ligne_utilisateur['pseudo'] ?></h3>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <section id="profil" class="intro-section">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <h1>Profil</h1>
           <?php
           $sql = $pdoCV->query("SELECT * FROM t_utilisateurs WHERE id_utilisateur = '$id_utilisateur'");
           $utilisateur = $sql->fetch();// va chercher !
           ?><br>

                       <p class="bg-info">Votre email est : <?=$utilisateur['email']?><br>
                       Votre telephone est : <?=$utilisateur['telephone']?><br>
                       Votre pseudo est : <?=$utilisateur['pseudo']?><br><br>
                        Photo de profil :<br>
                       <img src="../img/<?=$utilisateur['avatar']?>" width="90px" height="100px" style="border-radius:50px;" ></img><br><br>
                       Votre adresse est : <?=$utilisateur['adresse']?><br>
                       Votre code postal est : <?=$utilisateur['code_postal']?><br>
                       Votre ville est : <?=$utilisateur['ville']?><br>
                       Votre pays est : <?=$utilisateur['pays']?></p><br>
                       <a href="modif_profil.php?
                       id_utilisateur=<?= $utilisateur['id_utilisateur']?>"><span class="glyphicon glyphicon-pencil" ></span> Modifier vos informations...</a>

   </section>
            <?php
            $heure = date("H:i");
            setlocale(LC_TIME,"fr_FR.UTF-8","French_France.1252");
            echo strftime("%A %d %B %Y");
            echo "<br>".$heure;
            ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>


</body>

</html>
