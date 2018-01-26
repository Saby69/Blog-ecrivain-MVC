<?php
require_once('../../model/UserManager.php');
require_once('../../model/PostManager.php');
require_once('../../model/CommentManager.php');

function index() {
	require('backendView.php');
}

function login() {
 	$userManager = new UserManager();
 	$user = $userManager;
 	$password = $userManager;
 	$result = $userManager->getUser($user, $password);

		if ($result === false) {
			$error='L\'utilisateur n\'existe pas !';
            header ('location:../../index.php?action=connexion&error=' . $error);
		}
		else {
			header('location: backendView.php');
		}
}

function postadmin() {
	$postManager = new PostManager();
	$posts = $postManager->getPosts();
	require('listPostsViewAdmin.php');
}

function post() {
	$postManager = new PostManager();
	$post = $postManager->getPost($_GET['id']);
	require('modifyPost.php');
}


function addpost() {
	$postManager = new PostManager();
	if (isset($_POST['title']) && isset($_POST['content'])) {
		$add = $postManager->addPost($_POST['title'], $_POST['content']);
		header('location:index.php?action=postadmin'); die();
			
	}
	require('addPost.php');

}

function modifypost($id, $title, $content) {
	$postManager = new PostManager();
	$posts = $postManager->getPosts();

	if (isset($_POST['title']) && isset($_POST['content'])) {
		$modify = $postManager->modifyPost($id, $title, $content);

	}
	require('listPostsViewAdmin.php');
}

function deletepost($id) {
	$postManager = new PostManager();
	$posts = $postManager->getPosts();
	$delete = $postManager->deletePost($_GET['id']);
	header('location:index.php?action=postadmin'); die();
}

function alert($id) {
	$commentManager = new CommentManager();
	$alert = $commentManager->postComment($_GET['id'], $_GET['alert']);
}

?>

