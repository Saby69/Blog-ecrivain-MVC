<?php
    if(!isset($_SESSION)) 
    { 
                session_start(); 
    } 
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="../../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="../../public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../public/vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="../../public/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../public/css/resume.min.css" rel="stylesheet">
     <link href="../../public/css/styles-backend.css" rel="stylesheet">
     
     <!-- Editeur -->
     <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
     <script>tinymce.init({ selector:'textarea', language_url : '../../public/langs/fr_FR.js' });</script>
     
     <!--boite d'alerte-->
     <script src="../../public/vendor/jquery/jquery.js"></script>
     <script type="text/javascript">
            $(document).ready(function() {
                // Basic confirmation
                $(".link").popConfirm();
                
                // Custom Title, Content and Placement
                $(".button").popConfirm({
                    title: "Really ?",
                    content: "I have warned you !",
                    placement: "bottom"
                });
            });
        </script>


  </head>
	
	
	
<body id="page-top">

    <?php
    
    /*if (isset($_SESSION['is_connect'])) {
        $connect = $_SESSION['is_connect'];
    }
    else {
        $connect=0;
    }
    if ($connect == "1") {*/
        
    ?>

    <?php require('menu.php') ?>

    <div class="row"> 
        <div class = col-lg-10>
            <?= $content ?>
        </div>
    </div>
	
    <div class = "row">
        <div class="col-lg-12">
            
        </div>

    </div>
	
	<!-- Bootstrap core JavaScript -->
    <script src="../../public/vendor/jquery/jquery.min.js"></script>
    <script src="../../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../../public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../../public/js/resume.min.js"></script>
    <script src="../../public/vendor/jquery/jquery.popconfirm.js"></script>

  <?php // On affiche la page cachée.
    /*}
    else {
        header('location: ../../index.php?action=connexion'); //redirection vers page de login
    }*/
    ?>

</body>
</html>