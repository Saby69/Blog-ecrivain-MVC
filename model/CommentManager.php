<?php



require_once("Manager.php");

class CommentManager extends Manager {

	public function getComments($postId) {
		$db = $this->dbConnect();
		$comments = $db->prepare('SELECT id, post_id, author, comment, alert, DATE_FORMAT(comment_date, \'%d/%m/%y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? AND alert <= 2 order by comment_date DESC');
		$comments->execute(array($postId));


		return $comments;
	}

	public function getCommentsById($commentId) {
		$db = $this->dbConnect();
		$comments = $db->prepare('SELECT id, post_id, author, comment, alert, DATE_FORMAT(comment_date, \'%d/%m/%y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE id = ?');
		$comments->execute(array($commentId));
		

		return $comments->fetch();
	}


	public function postComment($postId, $author, $comment) {
		$db = $this->dbConnect();
		$comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES (?, ?, ?, NOW())');
		$affectedlines = $comments->execute(array($postId, $author, $comment));

	return $affectedlines;
	}

	public function alertComment($id) {
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE comments SET alert = 3  WHERE id = :id');
		$req->execute(array(
			'id'=>$id
			));
		$alertcomment = $req->fetch();

		return $alertcomment;
	}

	public function alertCommentFront($id) {
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE comments SET alert = 2  WHERE id = :id');
		$req->execute(array(
			'id'=>$id
			));
		$alertcommentfront = $req->fetch();

		return $alertcommentfront;
	}

	public function approveComment($id) {
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE comments SET alert = 1  WHERE id = :id');
		$req->execute(array(
			'id'=>$id
			));
		$alertcommentfront = $req->fetch();

		return $alertcommentfront;
	}

	public function adminComments() {
		$db = $this->dbconnect();
		$req = $db->query('SELECT id, post_id, author, comment, alert, DATE_FORMAT(comment_date, \'%d/%m/%y à %Hh%imin%ss\') AS comment_date_fr FROM comments  WHERE alert = 2 ORDER BY comment_date DESC');
		$comments = $req->fetchAll();

		return $comments;
	}

	public function getCommentsOldComments() {
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, post_id, author, comment, alert, DATE_FORMAT(comment_date, \'%d/%m/%y à %Hh%imin%ss\') AS comment_date_fr FROM comments  WHERE alert = 3 ORDER BY comment_date DESC');
		$comments = $req->fetchAll();

		return $comments;
	}

	public function deleteComment($id) {
		$db = $this->dbconnect();
		$req = $db->prepare('DELETE FROM comments WHERE id = ?');
		$req->execute(array($id));
		$delete = $req->fetch();

		return $delete;
	}
	
}

