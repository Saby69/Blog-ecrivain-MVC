<?php

require_once('../../model/UserManager.php');
require_once('../../model/PostManager.php');
require_once('../../model/CommentManager.php');


function login() {

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

    
    if (!isset($_SESSION['is_connect'])) {

    		header('location: ../../index.php?action=connexion');
    }

    require('backendView.php');
}

function postadmin() {
	$postManager = new PostManager();
	$posts = $postManager->getPosts();
	 if (!isset($_SESSION['is_connect'])) {
    
    		header('location: ../../index.php?action=connexion');
    }
	require('listPostsViewAdmin.php');
}

function post() {
	$postManager = new PostManager();
	$post = $postManager->getPost($_GET['id']);
	if (!isset($_SESSION['is_connect'])) {
    
    		header('location: ../../index.php?action=connexion');
    }
	require('modifyPost.php');
}


function addpost() {
	$postManager = new PostManager();
	if (!isset($_SESSION['is_connect'])) {
    
    		header('location: ../../index.php?action=connexion');
    }
	if (isset($_POST['title']) && isset($_POST['content'])) {
		$add = $postManager->addPost($_POST['title'], $_POST['content']);
		header('location:index.php?action=postadmin'); die();
			
	}
	require('addPost.php');

}

function directaddpost() {
	if (!isset($_SESSION['is_connect'])) {
    
    		header('location: ../../index.php?action=connexion');
    }

	require('addPost.php');
}

function modifypost($id, $title, $content) {
	$postManager = new PostManager();
	$posts = $postManager->getPosts();
	if (!isset($_SESSION['is_connect'])) {
    
    		header('location: ../../index.php?action=connexion');
    }

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
	if (!isset($_SESSION['is_connect'])) {

    		header('location: ../../index.php?action=connexion');
    }
	header('location:index.php?action=postadmin'); die();
}

function deletecomment($id) {
	$commentManager = new CommentManager();
	$comments = $commentManager->adminComments();
	$delete = $commentManager->deleteComment($_GET['id']);
	if (!isset($_SESSION['is_connect'])) {

    		header('location: ../../index.php?action=connexion');
    }
	header('location:index.php?action=oldcomments'); die();
}

function alertcomment() {
	if (!isset($_SESSION['is_connect'])) {
    
    		header('location: ../../index.php?action=connexion');
    }
	$commentManager = new CommentManager();
	$comments = $commentManager->adminComments();
	require('listcommentViewAdmin.php');
}

function changealert() {
	$commentManager = new CommentManager();
	$comments = $commentManager->adminComments();
	$comment = $commentManager->alertComment($_GET['id']);
	if (!isset($_SESSION['is_connect'])) {

    		header('location: ../../index.php?action=connexion');
    }
	header('location:index.php?action=addalert'); die();
}

function approvecom() {
	$commentManager = new CommentManager();
	$comments = $commentManager->adminComments();
	$comment = $commentManager->approveComment($_GET['id']);
	if (!isset($_SESSION['is_connect'])) {

    		header('location: ../../index.php?action=connexion');
    }
	header('location:index.php?action=addalert'); die();
}

function restore() {
	$commentManager = new CommentManager();
	$comments = $commentManager->adminComments();
	$comment = $commentManager->alertCommentFront($_GET['id']);
	if (!isset($_SESSION['is_connect'])) {

    		header('location: ../../index.php?action=connexion');
    }
	header('location:index.php?action=addalert'); die();
}
function oldcomments() {
	$commentManager = new CommentManager();
	$comments = $commentManager->getCommentsOldComments();
	if (!isset($_SESSION['is_connect'])) {
    
    		header('location: ../../index.php?action=connexion');
    }
	require('listoldcomments.php');
}



?>

