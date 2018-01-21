<?php
session_start();

    require("../connectbdd.php");

    if (isset($_POST) AND !empty($_POST)) {
            if (!empty(htmlspecialchars($_POST['user'])) AND !empty(htmlspecialchars($_POST['password']))) {
                $req = $bdd->prepare('SELECT * FROM users WHERE user =  :user AND password = :password');
                $req -> execute([
                'user' => $_POST ['user'],
                'password' => $_POST ['password']
                ]);

                $user = $req->fetchObject();
                if($user) {
                $_SESSION['admin'] = $_POST['user'];
                header ('location:index.php');
                }

                else {
                    
                   $error='L\'utilisateur n\'existe pas !';
                   require ('../login.php');
                    
                }   

            }
            else {
                $error='Tous les champs ne sont pas remplis !';
                require ('../login.php');
                } 
            }
                   

            if (isset ($error)) {
                echo '<div class="error">' . $error . '</div>';
            }
    '<div class="error"> </div>'

    
  ?>