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
		<h4><a href="index.php?action=addpost">Ajouter un épisode</a></h4>    
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
		    		<td><?php echo htmlspecialchars($data['title']); ?></td>
		    		<td><?php echo substr($data['content'], 0 ,300); ?> </td>
		    		<td><em><?php echo htmlspecialchars($data['date_creation_fr']); ?> </em><br /></td>
		    		<td><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">modifier</a></td>
		    		<td><a href="index.php?action=deletepost&amp;id=<?=$data['id'] ?>">supprimer</a></td>
		    	</tr>

		  	</table>
		</div>
		
	</div>
		<?php
		}
			?>


<?php $content = ob_get_clean(); ?> 

<?php require('template.php'); ?>