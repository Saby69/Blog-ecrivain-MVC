<?php require("header.php"); ?>
	 <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Billet simple
            <span class="text-primary">pour l'Alaska</span>
          </h1>
          
          <p class="mb-5">
            <?php require("connectbdd.php"); 
            $reponse = $bdd->query('SELECT id, author, title, textchap, DATE_FORMAT(datecreation, \'Le %d/%m/%Y\') AS datecrea FROM episodes');
            while ($liste_chapitres = $reponse->fetch())
{  ?>
  //Mise en forme des chapitres
  

  
  <h2><?php echo htmlspecialchars($liste_chapitres['title']); ?></h2>
  <strong><?php echo htmlspecialchars($liste_chapitres['author']); ?></strong><br /> 
  <em><?php echo htmlspecialchars($liste_chapitres['datecrea']); ?> </em><br />
   <?php echo substr($liste_chapitres['textchap'], 0, 300); ?><br />
   <a href="article.php?recupid=<?php echo $liste_chapitres['id']; ?>">Lire la suite...</a>
  <br /><br />

<?php
}

$reponse->closeCursor();
            ?>
          
        </div>
      </section>
</div>
<?php require ("footer.php");?>


