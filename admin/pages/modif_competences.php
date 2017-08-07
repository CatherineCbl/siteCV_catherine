<?php require '../../connexion/connexion.php';
 ?>
<?php
// Gestion des contenus, mise à jour d'une compétence
if(isset($_POST['competence'])){
	$competence = addslashes($_POST['competence']);
	$niveau = addslashes($_POST['niveau']);
	$id_competence = $_POST['id_competence'];
	$pdoCV->exec(" UPDATE t_competences SET competence='$competence', niveau='$niveau' WHERE id_competence='$id_competence' ");
	header('location: ../pages/competences.php');
	exit();
}
// Je recupere la competence
$id_competence = $_GET['id_competence']; // par l'id et $_GET
$sql = $pdoCV->query(" SELECT * FROM t_competences WHERE id_competence = '$id_competence' "); // la requête égale à l'id
$ligne_competences = $sql->fetch(); //

?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<?php
	$sql = $pdoCV->query(" SELECT * FROM t_utilisateurs WHERE id_utilisateur= '1' ");
	$ligne = $sql->fetch();// va chercher !
	?>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $ligne['prenom'].' '.$ligne['nom'];?></title>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="../css/monstyle.css">



	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->



	<!-- /.contenue modif-->

	<div id="page-content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 ">
					<section id="intro" class="intro-section">
						<form class="form-horizontal" method="post" action="modif_competences.php">
							<fieldset>

								<!-- Form Name -->
								<legend>Modification competence</legend>

								<!-- Text input-->
								<div class="form-group">
									<label for="competence" class="col-md-4 control-label" >Compétence</label>
									<div class="col-md-4">
										<input name="competence" type="text" class="form-control input-md" value="<?= $ligne_competences['competence']; ?>">
										<input name="niveau" type="text" class="form-control input-md" value="<?= $ligne_competences['niveau']; ?>">
										<input name="id_competence" hidden value="<?= $ligne_competences['id_competence']; ?>">
									</div>
								</div>

								<!-- Button -->
								<div class="form-group">
									<label class="col-md-4 control-label" for=""></label>
									<div class="col-md-4">
										<button type="submit" class="btn btn-primary">Mettre à jour</button>
                                        <a href="competences.php"><button type="button" name="button" class="btn btn-danger">Annuler</button></a>
									</div>
								</div>

							</fieldset>
						</form>
					</section>
				</div>
			</div>
		</div>
	</div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>



    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
