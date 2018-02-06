<?php

require_once('../../model/UserManager.php');
require_once('../../model/PostManager.php');
require_once('../../model/CommentManager.php');


function login() {
	session_start();
	$_SESSION['is_connect']=0;
 	$userManager = new UserManager();
 	$user = $userManager;
 	$password = $userManager;
 	$result = $userManager->getUser($user, $password);
 	
		if ($result === false) {
			$error='L\'utilisateur n\'existe pas !';
            header ('location:../../index.php?action=connexion&error=' . $error);
		}
		else {
			$_SESSION['is_connect'] = 1 ;
			header('location: backendView.php');
		}

}

function index() {
	require('backendView.php');
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

function directaddpost() {

	require('addPost.php');
}

function modifypost($id, $title, $content) {
	$postManager = new PostManager();
	$posts = $postManager->getPosts();

	if (isset($_POST['title']) && isset($_POST['content'])) {
		$modify = $postManager->modifyPost($id, $title, $content);
		header('location:index.php?action=postadmin'); die();

	}
	require('listPostsViewAdmin.php');
}

function deletepost($id) {
	$postManager = new PostManager();
	$posts = $postManager->getPosts();
	$delete = $postManager->deletePost($_GET['id']);
	header('location:index.php?action=postadmin'); die();
}

function deletecomment($id) {
	$commentManager = new CommentManager();
	$comments = $commentManager->adminComments();
	$delete = $commentManager->deleteComment($_GET['id']);
	header('location:index.php?action=oldcomments'); die();
}

function alertcomment() {
	$commentManager = new CommentManager();
	$comments = $commentManager->adminComments();
	require('listcommentViewAdmin.php');
}

function changealert() {
	$commentManager = new CommentManager();
	$comments = $commentManager->adminComments();
	$comment = $commentManager->alertComment($_GET['id']);
	header('location:index.php?action=addalert'); die();
}

function approvecom() {
	$commentManager = new CommentManager();
	$comments = $commentManager->adminComments();
	$comment = $commentManager->approveComment($_GET['id']);
	header('location:index.php?action=addalert'); die();
}

function restore() {
	$commentManager = new CommentManager();
	$comments = $commentManager->adminComments();
	$comment = $commentManager->alertCommentFront($_GET['id']);
	header('location:index.php?action=addalert'); die();
}
function oldcomments() {
	$commentManager = new CommentManager();
	$comments = $commentManager->getCommentsOldComments();
	require('listoldcomments.php');
}



?>

