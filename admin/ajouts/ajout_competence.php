<?php
 require '../../connexion/connexion.php';
//insertion


    if ($_POST) {
        $competence = addslashes($_POST['competence']);
        $niveau = addslashes($_POST['niveau']);
        $icone = addslashes($_POST['icone']);
        $pdoCV->exec(" INSERT INTO t_competences VALUES(NULL, '$icone','$competence', '$niveau', '$_SESSION[id_utilisateur]')");//mettre $id_utilisateur quand on l'aura en variable de session
        $lastinsert = $pdoCV->lastInsertId();
        $data = $pdoCV->query("SELECT * FROM t_competences WHERE id_competence='".$lastinsert."' ");
        $data = $data->fetch();
        echo json_encode($data);
    }
