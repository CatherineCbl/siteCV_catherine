<?php $this->layout('layout', ['title' => 'Site Cv Catherine CABEUIL']) ?>

<?php $this->start('competences') ?>

<div id="competences">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Compétences</h2>
      <hr>
    </div>
    <div class="row">
        
        <?= $competences->niveau ?>


    </div>
  </div>
</div>

<?php $this->stop('competences') ?>
