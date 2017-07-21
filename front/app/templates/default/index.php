<?php $this->layout('layout', ['title' => 'Site Cv Catherine CABEUIL']) ?>

<?php $this->start('competences') ?>

<div id="competences">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Compétences</h2>
      <hr>
    </div>
    <div class="row">

            <div class="bars">
                        <ul class="skills">
                            <?php foreach ($competences as $competence) : ?>
                            <img src=<?= $this->assetUrl("img/$competence->icone");?> alt=""><li>  <span class="bar-expand <?= $competence->competence ?>"></span></li>
                            <?php endforeach; ?>
                        </ul>

                    </div><!-- end skill-bars -->





    </div>
  </div>
</div>

<?php $this->stop('competences') ?>

<?php $this->start('experiences_formations') ?>
<div id="experiences_formations" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Expériences et formations</h2>
      <hr>
    </div>
    <div class="row">
                    <div class="col-lg-12">
                        <section class="timeline">
                            <ul>
                                <?php foreach ($formations as $formation) : ?>
                                <li>
                                    <div>
                                        <time class="text-uppercase"><?= $formation->dates_f ?></time>
                                        <h4 class="subheading"><?= $formation->titre_f ?></h4>
                                        <h5 class="subheading"><?= $formation->sous_titre_f ?></h5>
                                        <p class="text-muted"><p><?= $formation->description_f ?></p>
</p>

                                    </div>
                                </li>
                                <?php endforeach; ?>

                            </ul>
                        </section>
                    </div>
                </div>


  </div>
</div>
<?php $this->stop('experiences_formations') ?>


<?php $this->start('realisations') ?>

<div id="realisations">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center">
      <h2>Mes réalisations</h2>
      <hr>


    </div>

    <div class="row">
      <div class="portfolio-items">
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href=<?= $this->assetUrl("img/portfolio/01.jpg");?> title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Mon site CV</h4>
                <p>Fait avec Bootstrap, du PHP7, de l'Ajax,<br> du JS et une architecture MVC</p>
              </div>
              <img src=<?= $this->assetUrl("img/portfolio/01.jpg");?> class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
    </div>
</div>
</div>
</div>


<?php $this->stop('realisations') ?>

<?php $this->start('loisirs') ?>
<div id="loisirs" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Mes Loisirs</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="row testimonials">
          <div class="col-sm-4">
            <blockquote><i class="fa fa-quote-left"></i>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitduis sed dapibus leo nec ornare.</p>
              <div class="clients-name">
                <p><strong>John Doe</strong><br>
                  <em>CEO, Company Inc.</em></p>
              </div>
            </blockquote>
          </div>
          <div class="col-sm-4">
            <blockquote><i class="fa fa-quote-left"></i>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitduis sed dapibus leo nec ornare.</p>
              <div class="clients-name">
                <p><strong>Jane Doe</strong><br>
                  <em>CEO, Company Inc.</em></p>
              </div>
            </blockquote>
          </div>
          <div class="col-sm-4">
            <blockquote><i class="fa fa-quote-left"></i>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitduis sed dapibus leo nec ornare.</p>
              <div class="clients-name">
                <p><strong>Chris Smith</strong><br>
                  <em>CEO, Company Inc.</em></p>
              </div>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->stop('loisirs') ?>

<?php $this->start('contact') ?>
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Contactez-moi!</h2>
      <hr>
      <p><em>Mon profil vous intéresse? N'hésitez pas à me contacter!</em></p>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4">
        <div class="contact-item"> <i class="fa fa-map-marker fa-2x"></i>
          <p><?= $utilisateur->ville ?>, <?= $utilisateur->pays ?></p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item"> <i class="fa fa-envelope-o fa-2x"></i>
          <p><?= $utilisateur->email ?></p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item"> <i class="fa fa-phone fa-2x"></i>
          <p><?= $utilisateur->telephone ?></p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <h3>Envoyez moi un email</h3>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Votre nom" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Votre email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Votre message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Envoyer</button>
      </form>
      <div class="social">
        <h3>Suivez-moi!</h3>
        <ul>
          <li><a href="https://github.com/catherineCbl"><i class="fa fa-github"></i></a></li>
          <li><a href="https://www.linkedin.com/in/catherine-cabeuil"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php $this->stop('contact') ?>
