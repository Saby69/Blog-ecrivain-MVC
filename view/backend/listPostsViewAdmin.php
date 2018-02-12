
<?php $title = 'Billet simple'; ?>
	
<?php ob_start(); ?>

<div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Gestion
            <span class="text-primary">des épisodes</span>
          </h1>
          
  <br />
  <br />
		<h5><a href="index.php?action=directaddpost">Ajouter un épisode</a></h5>    
		<br />
  <br />    




<?php
foreach ($posts as $data)
{
?>
	<div class="news">
		

		<div class="table-responsive">
		  	<table class="table">
		    	<tr>
		    		<td width="10%"><?php echo htmlspecialchars($data['title']); ?></td>
		    		<td width="60%"><?php echo substr($data['content'], 0 ,300); ?> </td>
		    		<td width="10%"><em><?php echo htmlspecialchars($data['date_creation_fr']); ?> </em><br /></td>
		    		<td width="10%"><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">modifier</a></td>
		    		<td width="10%"><a href="index.php?action=deletepost&amp;id=<?=$data['id'] ?>" id="link">supprimer</a></td>
		    	</tr>

		  	</table>
		</div>
		
	</div>
		<?php
		}
			?>


<?php $content = ob_get_clean(); ?> 

<?php require('template.php'); ?>