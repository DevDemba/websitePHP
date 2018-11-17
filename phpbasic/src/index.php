	<?php 
				$user = 'demba';
				$password = 'password';
				$db = new PDO('mysql:host=db;dbname=ipssi', $user, $password);

				$articles = $db->query('SELECT * FROM article ORDER BY id DESC')

	?>
<!DOCTYPE html>
<html>
	<head>
		<?php include 'header.php'; ?>
		<title>my first website on docker</title>
	</head>
	<body>
		<header>
			<?php include 'menu.php'; ?>
		</header>
		
		<section>
			<div class="items">
			 	<?php while($a = $articles->fetch()){ ?>
			 		<div><li><?= $a['image'] ?></li><div>
			 		<div class="articles">
				 		<li><?= $a['title'] ?></li>
				 		<li><?= $a['content'] ?></li>
						<li><?= $a['author'] ?></li>
						<li><a href="article.php?id=<?= $a['id'] ?>">view more</a></li>
					</div>
			 	<?php } ?>
			</div>
		</section>
	</body>
</html>

