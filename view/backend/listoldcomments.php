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
	<h5><a href="index.php?action=addalert">Retour</a></h5>	
		<br />
  <br />    



	<div class="news">
		

		<div class="table-responsive">
		  	<table class="table">
		  		<tr style="font-weight: bold;">
		  			<td>Auteur</td>
		  			<td>Commentaire</td>
		  			<td>Envoyé le</td>
		  			<td>Action</td>
		  		</tr>
		  		<?php
					foreach ($comments as $data)
					{
					?>
				    	<tr>
				    		<td><?php echo htmlspecialchars($data['author']); ?></td>
				    		<td><?php echo $data['comment']; ?> </td>
				    		<td><em><?php echo htmlspecialchars($data['comment_date_fr']); ?> </em><br /></td>
				    		<td><a href="index.php?action=restore&amp;id=<?=$data['id'] ?>">Restaurer</a> | <a href="index.php?action=deletecomment&amp;id=<?=$data['id'] ?>" id="link">Supprimer définitivement</a></td>
				    	</tr>
				 <?php
					}
				?>

		  	</table>
		</div>
		
	</div>
		


<?php $content = ob_get_clean(); ?> 

<?php require('template.php'); ?>