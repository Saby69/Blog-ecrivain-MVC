<?php



require_once("Manager.php");

class CommentManager extends Manager {

	public function getComments($postId) {
		$db = $this->dbConnect();
		$comments = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? order by comment_date DESC');
		$comments->execute(array($postId));

		return $comments;
	}

	public function postComment($postId, $author, $comment) {
		$db = $this->dbConnect();
		$comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUE(?, ?, ?, NOW())');
		$affectedlines = $comments->execute(array($postId, $author, $comment));

	return $affectedlines;
	}

	
	public function alertComment() {
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE comments SET alert = false WHERE id = :id');
		$req->execute(array(
			'id'=>$id,
			'alert'=>$alert));
		$alertcomment = $req->fetch();

		return $alertcomment;
	}
	
}

