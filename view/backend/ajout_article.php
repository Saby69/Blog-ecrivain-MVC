<!DOCTYPE html>
<html>
<head>
	<title>Ajout article</title>
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>

	<form action="ajoutbdd.php" method="POST">
		<label for="title">Titre</label><input type = "text" name="title" id="title">
		<label for="texte_episode">Texte</label><textarea name="text_episode" id="texte_episode"></textarea>
	</form>
</body>
</html>

