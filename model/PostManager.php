<?php

//namespace blog_ecrivain_jf\model;

require_once("Manager.php");

class PostManager extends Manager {
	
	public function getPosts() {
		$db = $this->dbconnect();
		$req = $db->query('SELECT id, title, content, DATE_FORMAT(datecreation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM posts ORDER BY title ASC LIMIT 0, 10');
		$posts = $req->fetchAll();
		return $posts;
	}


	public function getPost($postId) {
		$db = $this->dbconnect(); 
		$req = $db->prepare('SELECT id, title, content, DATE_FORMAT(datecreation, \'%d/%m/%y à %Hh%imin%ss\') AS date_creation_fr FROM posts WHERE id = ?');
		$req->execute(array($postId));
		$post = $req->fetch();
		
		return $post;
	}

	public function addPost($title, $content) {
		$db = $this->dbconnect();
		$req = $db->prepare('INSERT INTO posts(title, content) VALUES(:title, :content)');
		$req->execute(array(
			'title'=>$title,
			'content'=>$content));
		$add = $req->fetch();
		
		return $add;
	}

	public function modifyPost($id, $title, $content) {
		$db = $this->dbconnect();
		$req = $db->prepare('UPDATE posts SET title = :title, content = :content WHERE id = :id');
		$req->execute(array(
			'id'=>$id,
			'title'=>$title,
			'content'=>$content));
		$modify = $req->fetch();

		return $modify;

	}

	public function deletePost($id) {
		$db = $this->dbconnect();
		$req = $db->prepare('DELETE FROM posts WHERE id = ?');
		$req->execute(array($id));
		$delete = $req->fetch();

		return $delete;
	}

	
}



//var_dump($title, $content);
//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
//print_r($db->errorInfo());
