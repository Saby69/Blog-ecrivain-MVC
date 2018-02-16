<?php $title = 'Espace d\'administration'; ?>

<?php ob_start(); ?>

	<div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
        	<h2 class="mb-0">Espace
            <span class="text-primary">d'administration</span>
          </h2>
          <h3>Bonjour <?php echo $_SESSION['username']; ?></h3>

          
        </div>
      </section>
</div>
<?php $content = ob_get_clean(); ?> 

<?php require('template.php'); ?>

