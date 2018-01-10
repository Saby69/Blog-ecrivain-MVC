<?php
	try {
		$bdd = new PDO('mysql:host=localhost; dbname=blog; charset=utf8', 'root', '');
	}

	catch(exeption $e) {
		die('erreur : ' . $e -> getMessage());
	}
?>
	