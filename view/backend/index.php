<?php
	
require('../../controller/backend.php');

try {
		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'login') {
			    if (isset($_POST['password']) AND isset($_POST['user'])) {
			    	login();
				} 
				else {
				throw new Exception('Mauvais identifiant ou mot de passe !');
				}
 			}

			elseif ($_GET['action'] == 'postadmin'){
				postadmin();
			}

			elseif ($_GET['action'] == 'post') {
				if (isset($_GET['id']) && $_GET['id'] > 0) {
					post();
				}
				else {
					throw new Exception('aucun identifiant de billet');
				}
			}

			elseif ($_GET['action'] == 'addpost') {
				addpost();
			}

			elseif ($_GET['action'] == 'modifypost') {
				if (isset($_GET['id']) && $_GET['id'] > 0) {
					
						modifypost($_GET['id'], $_POST['title'], $_POST['content']);
				}
				else {
					throw new Exception('aucun identifiant de billet');
				}
			}

			elseif ($_GET['action'] == 'deletepost') {
				deletepost($_GET['id']);
			}

			elseif ($_GET['action'] == 'addalert'){
				alertcomment();
				
			}

			elseif ($_GET['action'] == 'changealert'){
				if (isset($_GET['id']) && $_GET['id'] > 0) {
				changealert();
				}
				else {
					throw new Exception('ce commentaire n\'a pas pu être modéré');
					
				}
			}

		}
		else {
			index();
		} 
		
}
catch(Exception $e)  {
	$errorMessage = $e->getMessage();
	require('../../view/frontend/errorView.php');
	}
?>
	

