<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<h1>Mon super site</h1>
<p><a href="index.php">Retour à la liste des billets</a></p>

<div class="news">
	<h3> 
		<?php echo htmlspecialchars($post['title']); ?> 
		<em>le <?php echo $post['date_creation_fr']; ?></em>
	</h3> 


	<p> 
		<?php 
		echo nl2br(htmlspecialchars($post['content'])); 
		?> 
	</p>
</div>

<h2>Commentaires</h2>

<?php
while ($comment = $comments->fetch()) 
{
?>
	<p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr']?><a href="view/frontend/updatecomment.php?action=comment&amp;id=<?= $comment['id'] ?>">(Modifier)</a></p>
	<p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>

<?php
	}
?>

<h2>Commentaires</h2>

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