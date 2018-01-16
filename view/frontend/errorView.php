<?php $title = 'Erreur'; ?>
<?php ob_start(); ?>

<h1>Erreur</h1>




<h3><?php echo $errorMessage; ?></h3>

<?php $content = ob_get_clean(); ?> 
<?php require('view/frontend/template.php'); ?>