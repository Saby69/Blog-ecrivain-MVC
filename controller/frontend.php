<?php


require_once('model/PostManager.php'); 
require_once('model/CommentManager.php');
require_once('model/UserManager.php');

function listPosts() {
	$postManager = new PostManager();
	$posts = $postManager->getPosts();
	require('view/frontend/listPostsView.php');
}

function index() {
	$postManager = new PostManager();
	$posts = $postManager->getPosts();
	require('view/frontend/frontendView.php');

}



function post() {
	$postManager = new PostManager();
	$commentManager = new CommentManager();
	$post = $postManager->getPost($_GET['id']);
	$posts = $postManager->getPosts();
	$comments = $commentManager->getComments($_GET['id']);
	
	require('view/frontend/postView.php');

}

function addComment($postId, $author, $comment) {
	$postManager = new PostManager();
	$commentManager = new CommentManager();
	$affectedlines = $commentManager->postComment($postId, $author, $comment);

		if ($affectedlines === false) {
			throw new Exception('Impossibel d\'ajouter le commentaire !');
		}
		else {
			header('location: index.php?action=post&id=' . $postId);
		}
}

 function connexion() {
 	$postManager = new PostManager();
	$posts = $postManager->getPosts();
 	require('view/frontend/login.php');
 }

 function login() {
 	$userManager = new UserManager();
 	$user = $userManager->getUser();
	
 }

