<?php
require('view/frontend/frontendView.php');

require_once('model/PostManager.php'); 
//require_once ('model/CommentManager.php');

function listPosts() {
	$postManager = \blog_ecrivain_jf\model\PostManager();
	$posts = $postManager->getPosts();
	require('view/frontend/listPostsView.php');
}

/*function post() {
	$postManager = new \blog_ecrivain_jf\model\Postmanager();
	//$commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
	$post = $postManager->getPost($_GET['id']);
	//$comments = $commentManager->getComments($_GET['id']);
	
	require('view/frontend/postView.php');

}


function addComment($postId, $author, $comment) {
	$commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
	$affectedlines = $commentManager->postComment($postId, $author, $comment);

	if ($affectedlines === false) {
		throw new Exception('Impossibel d\'ajouter le commentaire !');
	}
	else {
		header('location: index.php?action=post&id=' . $postId);
	}

function newComment($commentId, $upComment, $postId) {
	$commentManager = new \OpenClassroom\Blog\Model\CommentManager();
	$affectedComments = $commentManager->updateComment($commentId, $upComment);
	require ('view/frontend/commentView.php');

	if ($affectedComments === false) {
		throw new Exception('Impossible de modifier le commentaire !');
	}
	else {
		header('location: index.php?action=post&id=' . $postId);
	}
}

}*/

?>

