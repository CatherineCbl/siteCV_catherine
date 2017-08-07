<?php
use Model\Db\DbFactory;

DbFactory::start();
$utilisateurs = \ORM::for_table('t_utilisateurs')->where('id_utilisateur', '1')->find_one();
$titres = \ORM::for_table('t_titres_cv')->where('utilisateur_id', '1')->find_one();
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Site CV de <?= $utilisateurs->prenom ?> <?= $utilisateurs->nom ?></title>

<meta name="description" content="Site Cv catherine CABEUIL">
<meta name="author" content="Catherine CABEUIL ">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href=<?= $this->assetUrl("css/bootstrap.css");?>>
<link rel="stylesheet" type="text/css" href=<?= $this->assetUrl("fonts/font-awesome/css/font-awesome.css");?>>

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href=<?= $this->assetUrl("css/style.css");?>>
<link rel="stylesheet" type="text/css" href=<?= $this->assetUrl("css/prettyPhoto.css");?>>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src=<?= $this->assetUrl("js/modernizr.custom.js");?>> </script>
<link rel="icon" type="image/png" href=<?= $this->assetUrl("img/portfolio/01.jpg");?> />


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<div id="preloader">
  <div id="status"> <img src=<?= $this->assetUrl("img/preloader.gif");?> height="64" width="64" alt=""> </div>
</div>
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
      <a class="navbar-brand page-scroll" href="#page-top"> <?= $utilisateurs->prenom ?> <?= $utilisateurs->nom ?></a> </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse" id="menu-center">
      <ul class="nav navbar-nav">
        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
        <li class="hidden"> <a href="#page-top"></a> </li>
        <li> <a class="page-scroll active" href="#competences">Compétences</a> </li>
        <li> <a class="page-scroll" href="#experiences_formations">Expériences et formations</a> </li>
        <li> <a class="page-scroll" href="#realisations">Réalisations</a> </li>
        <li> <a class="page-scroll" href="#loisirs">Loisirs</a> </li>
        <li> <a class="page-scroll" href="#contact">Contact</a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>

<!-- Header -->
<div id="intro">
    <!--<img src=<?= $this->assetUrl("img/intro-bg.jpg");?> alt="" class="img-responsive" style="background: no-repeat center center fixed;">-->
  <div class="intro-body">
    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
          <h1><span class="brand-heading typed "></span></h1>
          <span class="typed-cursor hidden-sm hidden-xs"></span><br><br><br>
          <a href=<?= $this->assetUrl("img/CV_catherine_cabeuil.pdf");?> class="btn btn-default page-scroll" download>Téléchargez mon CV </a> </div>
      </div>
    </div>

        <a href="https://github.com/catherineCbl" target="_blank"><i class="fa fa-github" style="font-size:30px; margin: 10px 10px; marg"></i></a>
        <a href="https://www.linkedin.com/in/catherine-cabeuil" target="_blank"><i class="fa fa-linkedin" style="font-size:30px;"></i></a>

  </div>
</div>

<!-- Section compétences -->
<?=$this->section('competences');?>

<!-- Section expériences et formations-->
<?=$this->section('experiences_formations');?>

<!-- Section réalisations -->
<?=$this->section('realisations');?>

<!-- Section Loisirs -->
<?=$this->section('loisirs');?>

<!-- Contact Section -->
<?=$this->section('contact');?>


<div id="footer">
  <div class="container">
    <p><?= $utilisateurs->prenom ?> <?= $utilisateurs->nom ?> 2017</p>  <p><a href="../../../admin/pages/authentification.php">Espace admin</a></p>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src=<?= $this->assetUrl("js/jquery.1.11.1.js")?>></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src=<?= $this->assetUrl("js/bootstrap.js")?>></script>
<script type="text/javascript" src=<?= $this->assetUrl("js/SmoothScroll.js")?>></script>
<script type="text/javascript" src=<?= $this->assetUrl("js/jquery.prettyPhoto.js")?>></script>
<script type="text/javascript" src=<?= $this->assetUrl("js/jquery.isotope.js")?>></script>
<script type="text/javascript" src=<?= $this->assetUrl("js/jquery.parallax.js")?>></script>
<script type="text/javascript" src=<?= $this->assetUrl("js/jqBootstrapValidation.js")?>></script>
<script type="text/javascript" src=<?= $this->assetUrl("js/contact_me.js")?>></script>

<!-- Javascripts
    ================================================== -->
<script type="text/javascript" src=<?= $this->assetUrl("js/main.js")?>></script>
<script type="text/javascript" src=<?= $this->assetUrl("js/timeline.js")?>></script>
<script type="text/javascript" src=<?= $this->assetUrl("js/typed.min.js")?>></script>
<script>
$(".typed").typed({
                  strings: [ "Développeuse web full-stack junior", "Organisée et persévérante", "Catherine CABEUIL"],
                  typeSpeed: 100,
                  startDelay: 1000,
                  backDelay: 1000,
                  loop: false
              });

</script>

</body>
</html>
