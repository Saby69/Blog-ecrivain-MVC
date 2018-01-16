<?php $title = 'Mon blog'; ?>
	
<?php ob_start(); ?>

<h1>Mon super site</h1>
<p>Derniers billets du blog :</p>



<?php

while ($data = $posts->fetch()) 
{
?>
	<div class="news">
		<h3> 
			<?php echo htmlspecialchars($data['title']); ?> le 
			
		</h3> 


		<p> 
			<?php 
			echo nl2br(htmlspecialchars($data['content'])); 
			?> 
			<br />
			
		</p>
	</div>
		<?php
		}
$posts->closeCursor();
			?>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>