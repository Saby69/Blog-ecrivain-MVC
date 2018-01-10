<?php
require("header.php");
require("connectbdd.php"); 
            $reponse = $bdd->prepare('SELECT id, author, title, textchap, DATE_FORMAT(datecreation, \'Le %d/%m/%Y\') AS datecrea FROM episodes WHERE id = ?');
            $reponse->execute(array($_GET['recupid']));
            while ($liste_chapitres = $reponse->fetch())

            {
?><div class="container-fluid p-0">

      
	<section class="resume-section p-3 p-lg-5 d-flex d-column">
        <div class="my-auto">
          <h1 class="mb-0">Billet simple
            <span class="text-primary">pour l'Alaska</span>
          </h1>
             
            	
            	<h3><?php echo htmlspecialchars($liste_chapitres['title']); ?>  </h2><br />
            	<strong><?php echo htmlspecialchars($liste_chapitres['author']); ?></strong><br /> 
  				<em><?php echo htmlspecialchars($liste_chapitres['datecrea']); ?> </em><br /><br />
            		
            	<p><?php echo htmlspecialchars($liste_chapitres['textchap']); ?></p>
            		

            </section>
            <?php	
            }
            $reponse->closeCursor();

require("footer.php")
            ?>
            	 

