<?php
	session_start();

require('../../controller/backend.php');

try {
		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'login') {
				if (!empty($_POST['user']) AND !empty($_POST['password'])) {
			    	login();
				} 
				else {
				$error ='Tous les champs ne sont pas remplis !';
				header('location: ../../index.php?action=connexion&error=' . $error);
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
				if (!empty($_POST['title']) AND !empty($_POST['content'])) {
			    	addpost();
				} 
				else {
				throw new Exception('pb champs');
				}
			}

			elseif ($_GET['action'] == 'directaddpost') {
				directaddpost();
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

			elseif ($_GET['action'] == 'deletecomment') {
				deletecomment($_GET['id']);
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

			elseif ($_GET['action'] == 'approvecom'){
				if (isset($_GET['id']) && $_GET['id'] > 0) {
				approvecom();
				}
				else {
					throw new Exception('ce commentaire n\'a pas pu être modéré');
					
				}
			}

			elseif ($_GET['action'] == 'restore'){
				if (isset($_GET['id']) && $_GET['id'] > 0) {
				restore();
				}
				else {
					throw new Exception('ce commentaire n\'a pas pu être modéré');
					
				}
			}

			elseif ($_GET['action'] == 'oldcomments') {
				oldcomments();
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
	

