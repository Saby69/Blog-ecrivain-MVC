<?php
	
require('../../controller/backend.php');

try {
		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'login') {
				 
			    if (isset($_POST['password']) AND isset($_POST['user'])) {
			    	login();

				   				} 
				else {
				echo 'Mauvais identifiant ou mot de passe !';
				}
 			}
		
			else {
			
    			echo 'Mauvais identifiant ou mot de passe !';	
			}
			
		}
		else {
			formconnexion();
		}
		
	}
	catch(Exception $e)  {
		$errorMessage = $e->getMessage();
		require('errorView.php');
	}
	

