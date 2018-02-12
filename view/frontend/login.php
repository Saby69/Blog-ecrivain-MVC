<?php session_start(); ?>
<?php $title = 'Login'; ?>

<?php ob_start(); ?>


	<div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
        	<h2 class="mb-0">Espace
            <span class="text-primary">d'administration</span>
          </h2>
          
          <div class="error"><?php if(!empty($_GET['error'])) echo '    <p>', $_GET['error'], '</p>' ?></div>
          <form action="view/backend/index.php?action=login" method="POST">
          	<div class="row" style="padding-top: 10px;">
          		<div class="col-lg-4">Nom d'utilisateur</div>
	      		<div class="col-lg-4"><input type="text" name="user" id="user"></div>
          	</div>
          	<div class="row" style="padding-top: 10px;">
          		<div class="col-lg-4">Mot de passe</div>
         		<div class="col-lg-4"><input type="password" name="password" id="password"></div>
          	</div>
          	<div class="row" style="padding-top: 10px;">
          		<div class="col-lg-4"></div>
         		<div class="col-lg-4"><input class="btn-primary" type="submit" name="Envoyer" value="Se connecter"></div>
          	</div>
		

	</form>
        </div>
      </section>
</div>
	
<?php $content = ob_get_clean(); ?> 

<?php require('template.php'); ?>
