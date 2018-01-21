<?php $title = 'Billet simple'; ?>
	
<?php ob_start(); ?>

<div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Billet simple
            <span class="text-primary">pour l'Alaska</span>
          </h1>
          
          


<?php
foreach ($posts as $data)
{
?>
	<div class="news">
		<h2> 
			<?php echo htmlspecialchars($data['title']); ?>
			
		</h2> 
		
  		<em><?php echo htmlspecialchars($data['date_creation_fr']); ?> </em><br />


		<p> 
			<?php 
			echo substr(htmlspecialchars($data['content']), 0, 300); 
			?> 
			<br />
			<a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Lire la suite...</a>
<!--			
		</p>
	</div>
		<?php
		}
			?>

<?php $content = ob_get_clean(); ?> 

<?php require('template.php'); ?>