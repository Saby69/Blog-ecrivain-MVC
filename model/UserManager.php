<?php



require_once("Manager.php");

class UserManager extends Manager
{
	public function getUser($username)
    {
		$db = $this->dbconnect();
		$req = $db->prepare('SELECT * FROM users WHERE user = :user');
                 $req -> execute(array(
                'user' => $username));
        
        $result = $req->fetch();
		
		return $result;
	}
}

