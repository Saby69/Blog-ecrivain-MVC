<?php $title = 'Billet simple'; ?>
	
<?php ob_start(); ?>

<div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Billet simple
            <span class="text-primary">pour l'Alaska</span>
          </h1>
        </div>
      </section>
</div>




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
			<!--<em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a></em>-->
		</p>
	</div>
		<?php
		}
$posts->closeCursor();
			?>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>