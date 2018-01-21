<?php


require_once('model/PostManager.php'); 
require_once('model/CommentManager.php');

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

/*function menu() {
	$postManager = new PostManager();
	//$commentManager = new CommentManager();
	//$posts = $postManager->getPosts();
	$post = $postManager->getPost($_GET['id']);
	//$comments = $commentManager->getComments($_GET['id']);
	require('view/frontend/postView.php');

}*/


function post() {
	$postManager = new Postmanager();
	$commentManager = new CommentManager();
	$post = $postManager->getPost($_GET['id']);
	$posts = $postManager->getPosts();
	$comments = $commentManager->getComments($_GET['id']);
	
	require('view/frontend/postView.php');

}

function addComment($postId, $author, $comment) {
	$commentManager = new CommentManager();
	$affectedlines = $commentManager->postComment($postId, $author, $comment);

		if ($affectedlines === false) {
			throw new Exception('Impossibel d\'ajouter le commentaire !');
		}
		else {
			header('location: index.php?action=post&amp;id=' . $postId);
		}
}

 function connexion () {
 	$postManager = new PostManager();
	$posts = $postManager->getPosts();
 	require('view/frontend/login.php');
 }

