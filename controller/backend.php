<?php
require_once('../../model/UserManager.php');

function indexbe() {
	require('../../view/backend/backendView.php');

}

function login() {
 	$userManager = new UserManager();
 	$user = $userManager;
 	$password = $userManager;
 	$result = $userManager->getUser($user, $password);

		if ($result === false) {
			throw new Exception('Impossible de se connecter !');
		}
		else {
			header('location: backendView.php');
		}

	
 }
 	

function formconnexion() {
	require('view/frontend/login.php');
}
?>

