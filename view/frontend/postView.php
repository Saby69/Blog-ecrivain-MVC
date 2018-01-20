<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Billet simple
            <span class="text-primary">pour l'Alaska</span>
          </h1>
          
         
            

<p><a href="index.php">Retour à la liste des billets</a></p>

<div class="news">
	<h2> 
		<?php echo htmlspecialchars($post['title']); ?> 
	</h2>
		<em>le <?php echo $post['date_creation_fr']; ?></em>
	 


	<p> 
		<?php 
		echo nl2br(htmlspecialchars($post['content'])); 
		?> 
	</p>
</div>

<hr />

<h3>Commentaires</h3>
<?php
while ($comment = $comments->fetch()) 
{
?>
	<p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr']?><a href="# ?>"> (Signaler)</a></p>
	<p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>

<?php
	}
?>

<hr />
<h3>Ajouter un commentaire</h3>

<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="POST">
	<div>
		<label for="author">Auteur</label><br />
		<input type="text" id="author" name="author">
	</div>
	<div>
		<label for="comment">Commentaire</label><br />
		<textarea id="comment" name="comment"></textarea>
	</div>
	<div>
		<input type="submit" name="envoyer" value="ok !">
	</div>
</form>





<?php $content = ob_get_clean(); ?> 

<?php require('template.php'); ?>


