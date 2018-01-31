<?php $title = 'Billet simple'; ?>
	
<?php ob_start(); ?>

<div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Gestion
            <span class="text-primary">des commentaires</span>
          </h1>
          
  <br />
  <br />
		
		<br />
  <br />    


<?php
foreach ($comments as $data)
{
?>
	<div class="news">
		

		<div class="table-responsive">
		  	<table class="table">
		    	<tr>
		    		<td><?php echo htmlspecialchars($data['author']); ?></td>
		    		<td><?php echo $data['comment']; ?> </td>
		    		<td><em><?php echo htmlspecialchars($data['comment_date_fr']); ?> </em><br /></td>
		    		<td><a href="index.php?action=changealert&amp;id=<?=$data['id'] ?>">modérer</a></td>
		    	</tr>

		  	</table>
		</div>
		
	</div>
		<?php
		}
			?>


<?php $content = ob_get_clean(); ?> 

<?php require('template.php'); ?>