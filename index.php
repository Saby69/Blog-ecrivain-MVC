
	<?php

	require('controller/frontend.php');

try {
		if (isset($_GET['action'])) {
			if ($_GET['action'] == 'listPosts') {
			listPosts();	
			}
			elseif ($_GET['action'] == 'post') {
				if (isset($_GET['id']) && $_GET['id'] > 0) {
					post();
				}
				else {
					throw new Exception('aucun identifiant de billet envoyé');
				}
			}
			elseif ($_GET['action'] == 'addComment') {
				if (isset($_GET['id']) && $_GET['id'] > 0) {
					if (!empty($_POST['author']) && !empty($_POST['comment'])) {
						addComment($_GET['id'], $_POST['author'], $_POST['comment']);
					}
					else {
						$error = 'Tous les champs ne sont pas remplis !';
						header('location: index.php?action=post&id=' . $_GET['id'] . "&error=" . $error);
					}
				}
				else {
					throw new Exception('aucun identifiant de billet');
				}
			}
			
			elseif ($_GET['action'] == 'connexion') {
				
					connexion();
				
			}

			
			elseif ($_GET['action'] == 'alertcom'){
				if (isset($_GET['id']) && $_GET['id'] > 0) {
				alertcom();
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
		$postManager = new PostManager();
		$posts = $postManager->getPosts();
		$errorMessage = $e->getMessage();
		require('view/frontend/errorView.php');
	}