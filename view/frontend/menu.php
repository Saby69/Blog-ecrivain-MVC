

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="index.php">
        <span class="d-block d-lg-none">Menu</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="public/img/profile.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php?action=listPosts">Episodes</a>
          </li>
          <li class="nav-item">
          	
          	<?php
foreach ($posts as $data)
{
?>
  
      <p><a href="index.php?action=post&amp;id=<?= $data['id'] ?>" style = "color:white;"><?php echo htmlspecialchars($data['title']); ?></a></p>
    
    <?php
    }
      ?>
           </li>
          
        </ul>
      </div>
    </nav>	

 
 