<?php



require_once("Manager.php");

class CommentManager extends Manager {

	public function getComments($postId) {
		$db = $this->dbConnect();
		$comments = $db->prepare('SELECT id, post_id, author, comment, alert, DATE_FORMAT(comment_date, \'%d/%m/%y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? AND alert <=> 0 order by comment_date DESC');
		$comments->execute(array($postId));

		return $comments;
	}

	public function postComment($postId, $author, $comment) {
		$db = $this->dbConnect();
		$comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUE(?, ?, ?, NOW())');
		$affectedlines = $comments->execute(array($postId, $author, $comment));

	return $affectedlines;
	}

	public function alertComment($id) {
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE comments SET alert = 0  WHERE id = :id');
		$req->execute(array(
			'id'=>$id
			));
		$alertcomment = $req->fetch();

		return $alertcomment;
	}

	public function alertCommentFront($id) {
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE comments SET alert = true  WHERE id = :id');
		$req->execute(array(
			'id'=>$id
			));
		$alertcommentfront = $req->fetch();

		return $alertcommentfront;
	}

	public function adminComments() {
		$db = $this->dbconnect();
		$req = $db->query('SELECT id, post_id, author, comment, alert, DATE_FORMAT(comment_date, \'%d/%m/%y à %Hh%imin%ss\') AS comment_date_fr FROM comments  WHERE alert = 1 ORDER BY comment_date DESC');
		$comments = $req->fetchAll();

		return $comments;
	}
	
}

