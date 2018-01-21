<?php

//namespace blog_ecrivain_jf\model;

require_once("Manager.php");

class UserManager extends Manager {
	
	/*public function getPosts() {
		$db = $this->dbconnect();
		$req = $db->query('SELECT id, title, content, DATE_FORMAT(datecreation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM posts ORDER BY title ASC LIMIT 0, 5');
		$posts = $req->fetchAll();
		return $posts;
	}*/


	public function getUser() {
		$db = $this->dbconnect();
		$req = $db->prepare('SELECT * FROM users WHERE user =  :user AND password = :password');
                $req -> execute([
                'user' => $_POST ['user'],
                'password' => $_POST ['password']
                ]);
        $user = $req->fetch();
		
		return $user;
	}

	
}

