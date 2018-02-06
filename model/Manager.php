<?php
//namespace blog_ecrivain_jf\model;

class Manager {
	protected function dbConnect() {
		$db = new PDO('mysql:host=localhost;dbname=blog-jf-ecrivain;charset=utf8', 'root', '');
		return $db;
	}
	
}