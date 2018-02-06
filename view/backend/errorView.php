
<?php $title = 'Erreur'; ?>
<?php ob_start(); ?>

<div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h3 class="mb-0">Erreur
            
          </h3>





<p><?php echo $errorMessage; ?></p>
</div>

<?php $content = ob_get_clean(); ?> 
<?php require('../frontend/template.php'); ?>