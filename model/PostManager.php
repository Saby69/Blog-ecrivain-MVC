<?php

//namespace blog_ecrivain_jf\model;

require_once("Manager.php");

class PostManager extends Manager {
	
	public function getPosts() {
		$db = $this->dbconnect();
		$req = $db->query('SELECT id, title, content, datecreation FROM posts');

		return $req;
	}


	public function getPost($postId) {
		$db = $this->dbconnect(); 
		$req = $db->prepare('SELECT id, title, content, DATE_FORMAT(datecreation, \'%d/%m/%y à %Hh%imin%ss\') AS date_creation_fr FROM posts WHERE id = ?');
		$req->execute(array($postId));
		$post = $req->fetch();
		
		return $post;
	}

	
}

