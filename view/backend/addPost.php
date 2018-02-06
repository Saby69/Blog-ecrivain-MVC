

	
<?php ob_start(); ?>
<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Ajout
            <span class="text-primary">d'un épisode</span>
          </h1>
	
	<br />
  <br />    
  

	<form action="index.php?action=addpost" method="POST">
		<input type = "text" name="title" id="title" value="Titre"><br /><br />
		<textarea name="content" id="content"></textarea><br />
		<input class="btn-primary" type="submit" name="Envoyer" value="Ajouter épisode">

	</form>
</body>
</html>

<?php $content = ob_get_clean(); ?> 

<?php require('template.php'); ?>