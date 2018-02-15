
?>
<?php $title = 'Modifier article'; ?>
	
<?php ob_start(); ?>
<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Modification
            <span class="text-primary">d'un épisode</span>
          </h1>
	
	<br />
  <br />    
  

	<form action="index.php?action=modifypost&amp;id=<?= $post['id']?>" method="POST">
		<input type = "text" name="title" id="title" value="<?php echo $post['title'];?>"><br /><br />
		<textarea rows="15" name="content" id="content"><?php echo $post['content'];?></textarea><br />
		<input class="btn-primary" type="submit" name="Envoyer" value="Modifier l'épisode">

	</form>
</body>
</html>

<?php $content = ob_get_clean(); ?> 

<?php require('template.php'); ?>