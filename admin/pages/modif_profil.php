<?php require '../../connexion/connexion.php';
 ?>
<?php
// Gestion des contenus, mise à jour d'une utilisateur
if(isset($_POST['email'])){

	$email = addslashes($_POST['email']);
	$telephone = addslashes($_POST['telephone']);
	$mdp = addslashes($_POST['mdp']);
	$pseudo = addslashes($_POST['pseudo']);
	$photo = addslashes($_POST['avatar']);
	$statut_marital = addslashes($_POST['statut_marital']);
	$adresse = addslashes($_POST['adresse']);
	$code_postal = addslashes($_POST['code_postal']);
	$ville = addslashes($_POST['ville']);
	$pays = addslashes($_POST['pays']);
    $id_utilisateur = $_POST['id_utilisateur'];

	$pdoCV->exec(" UPDATE t_utilisateurs SET email='$email', telephone='$telephone', mdp='$mdp', pseudo='$pseudo', avatar='$photo', statut_marital='$statut_marital', adresse='$adresse', code_postal='$code_postal', ville='$ville', pays='$pays' WHERE id_utilisateur='$id_utilisateur' ");
	header('location: ../pages/index.php');
	exit();
}
// Je recupere la utilisateur
$id_utilisateur = $_GET['id_utilisateur']; // par l'id et $_GET
$sql = $pdoCV->query(" SELECT * FROM t_utilisateurs WHERE id_utilisateur = '$id_utilisateur' "); // la requête égale à l'id
$ligne_utilisateur = $sql->fetch(); //

?>
<!DOCTYPE html>
<html lang="fr">

<head>


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?=$ligne_utilisateur['prenom'].' '.$ligne_utilisateur['nom'];?></title>
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

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->



	<!-- /.contenue modif-->

	<div id="page-content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-sm-offset-3 col-sm-6">
					<section id="intro" class="intro-section">
                        <form class="form-horizontal" method="post" action="modif_profil.php">
							<fieldset>

							<!-- Form Name -->
							<legend>Modifier</legend>

							<!-- Text input-->
							<div class="form-group">
								<label for="email" class="col-md-4 control-label" >Email</label>
								<div class="col-md-4">
									<input name="email" type="text" class="form-control input-md" value="<?= $ligne_utilisateur['email']; ?>">
									<input name="id_utilisateur" hidden value="<?= $ligne_utilisateur['id_utilisateur']; ?>">
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								<label for="telephone" class="col-md-4 control-label" >Téléphone</label>
								<div class="col-md-4">
									<input name="telephone" type="text" class="form-control input-md" value="<?= $ligne_utilisateur['telephone']; ?>">
									<input name="id_utilisateur" hidden value="<?= $ligne_utilisateur['id_utilisateur']; ?>">
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								<label for="mdp" class="col-md-4 control-label" >Mot de passe</label>
								<div class="col-md-4">
									<input name="mdp" type="text" class="form-control input-md" value="<?= $ligne_utilisateur['mdp']; ?>">
									<input name="id_utilisateur" hidden value="<?= $ligne_utilisateur['id_utilisateur']; ?>">
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								<label for="pseudo" class="col-md-4 control-label" >Pseudo</label>
								<div class="col-md-4">
									<input name="pseudo" type="text" class="form-control input-md" value="<?= $ligne_utilisateur['pseudo']; ?>">
									<input name="id_utilisateur" hidden value="<?= $ligne_utilisateur['id_utilisateur']; ?>">
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								<label for="avatar" class="col-md-4 control-label" >Photo de profil</label>
								<div class="col-md-4">
									<input name="avatar" type="text" class="form-control input-md" value="<?= $ligne_utilisateur['avatar']; ?>">
									<input name="id_utilisateur" hidden value="<?= $ligne_utilisateur['id_utilisateur']; ?>">
								</div>
							</div>
							
							<!-- Text input-->
							<div class="form-group">
								<label for="statut_marital" class="col-md-4 control-label" >Statut marital</label>
								<div class="col-md-4">
									<input name="statut_marital" type="text" class="form-control input-md" value="<?= $ligne_utilisateur['statut_marital']; ?>">
									<input name="id_utilisateur" hidden value="<?= $ligne_utilisateur['id_utilisateur']; ?>">
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								<label for="adresse" class="col-md-4 control-label" >Adresse</label>
								<div class="col-md-4">
									<input name="adresse" type="text" class="form-control input-md" value="<?= $ligne_utilisateur['adresse']; ?>">
									<input name="id_utilisateur" hidden value="<?= $ligne_utilisateur['id_utilisateur']; ?>">
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								<label for="code_postal" class="col-md-4 control-label" >Code postal</label>
								<div class="col-md-4">
									<input name="code_postal" type="text" class="form-control input-md" value="<?= $ligne_utilisateur['code_postal']; ?>">
									<input name="id_utilisateur" hidden value="<?= $ligne_utilisateur['id_utilisateur']; ?>">
								</div>
							</div>
							<!-- Text input-->
							<div class="form-group">
								<label for="ville" class="col-md-4 control-label" >Ville</label>
								<div class="col-md-4">
									<input name="ville" type="text" class="form-control input-md" value="<?= $ligne_utilisateur['ville']; ?>">
									<input name="id_utilisateur" hidden value="<?= $ligne_utilisateur['id_utilisateur']; ?>">
								</div>
							</div>


							<!-- Text input-->
							<div class="form-group">
								<label for="pays" class="col-md-4 control-label" >Pays</label>
								<div class="col-md-4">
									<input name="pays" type="text" class="form-control input-md" value="<?= $ligne_utilisateur['pays']; ?>">
								</div>
							</div>

							<!-- Button -->
							<div class="form-group">
								<label class="col-md-4 control-label" for=""></label>
								<div class="col-md-4">
									<button type="submit" class="btn btn-primary">Mettre à jour</button>
                                    <a href="index.php"><button type="button" name="button" class="btn btn-danger">Annuler</button></a>
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
