<?php include 'header.php'; ?>
<?php

	$user = 'demba';
	$password = 'password';
	$db = new PDO('mysql:host=db;dbname=ipssi', $user, $password);

	if(isset($_GET['id']) AND !empty($_GET['id'])) {

		$get_id = htmlspecialchars($_GET['id']);

		$article = $db->prepare('SELECT * FROM article WHERE id = ?');
		$article->execute(array($get_id));

		if($article->rowCount() == 1) {

			$article = $article->fetch();
			$title = $article['title'];
			$content = $article['content'];
			$image = $article['image'];
			$author = $article['author'];

		}else{

			die('This article doesn\'t exist !');
		}

	}else{

		die('Error');
	}

?>
 		
<!DOCTYPE html>
<html>
	<head>
		<?php include 'header.php'; ?>
		<title>my article</title>
	</head>
	<body

		<div class="articles">
			<li><h3><?=$title ?></h3></li>
			<li><?=$image ?></li>
			<li><?=$content ?></li>
			<li><?=$author ?></li>
		</div>

		<div>
			<form method="POST">
				<div class="form-group">
					<input type="text"  name="login" class="form-control" placeholder="author"/><
					<input type="textarea" name="comments" class="form-control" placeholder="write your comment">
					<input type="submit" name="submit" class="btn btn-default" value="add">
				</div>
			</form>
		</div>

		<div><a href="index.php" class="back">Back to home</a></div>
	</body>
</html>

