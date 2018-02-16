<?php

//namespace blog_ecrivain_jf\model;

require_once("Manager.php");



class UserManager extends Manager
{
	public function getUser($username, $password)
    {
		$db = $this->dbconnect();
		$req = $db->prepare('SELECT * FROM users WHERE user = ? AND password = ?');
        $req->execute(array(
                $username,
                $password));
        
        $result = $req->fetch();
		
		return $result;
	}
}