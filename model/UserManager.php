<?php

//namespace blog_ecrivain_jf\model;

require_once("Manager.php");

class UserManager extends Manager {
	
	
	public function getUser() {
		$db = $this->dbconnect();
		$req = $db->prepare('SELECT * FROM users WHERE user = :user AND password = :password');
                $req -> execute(array(
                'user' => $_POST ['user'],
                'password' => $_POST['password']));
        
        $result = $req->fetch();
		
		return $result;
	}

	
}

