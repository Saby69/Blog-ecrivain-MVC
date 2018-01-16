<?php $title = 'Mon blog'; ?>
	
<?php ob_start(); ?>

<div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Jean
            <span class="text-primary">Forteroche</span>
          </h1>
          <div class="subheading mb-5">Acteur et écrivain
            <a href="mailto:name@email.com">contact@email.com</a>
          </div>
          <p class="mb-5">Bienvenue sur mon nouveau site dédié à mon nouveau roman :</p>
          <h1>Billet simple pour l'Alaska</h1>
          
        </div>
      </section>
</div>





<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>