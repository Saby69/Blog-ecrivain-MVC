<?php
	
	require('../../controller/frontend.php');
	require('../../controller/backend.php');

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
						throw new Exception('tous les champs ne sont pas remplis !');
					}
				}
				else {
					throw new Exception('aucun identifiant de billet');
				}
			}
			
			elseif ($_GET['action'] == 'connexion') {
				connexion();
			}
			elseif($_GET['action'] == 'login') { 
				if (isset($_POST) AND !empty($_POST)) {
            		if (!empty(htmlspecialchars($_POST['user'])) AND !empty(htmlspecialchars($_POST['password']))) {
		                login();
			                if($user) {
				                $_SESSION['admin'] = $_POST['user'];
				                //header ('location:view/backend/index.php');
			                }

			                else {
			                    
			                   throw new Exception('L\'utilisateur n\'existe pas !');
			                   	                    
			                }   
					}
		            else {
		                throw new Exception('Tous les champs ne sont pas remplis !');
		            } 
            	}
            }
		}
		else {
			indexbe();
		}
	}
	catch(Exception $e)  {
		$errorMessage = $e->getMessage();
		require('view/frontend/errorView.php');
	}
	

