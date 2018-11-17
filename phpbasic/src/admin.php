<!DOCTYPE html>
<html>
	<head>
		<?php include 'header.php'; ?>
		<title>articles</title>
	</head>
	<body>

	<header>
		<?php include 'menu.php'; ?>
		<?php include 'createArticle.php' ?>
	</header>

	<section class="createArticle">
		<div>
			 <?php uploadFile(); ?>
		</div>
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="title">Title&nbsp:&nbsp</label>
				<input type="text" name="title" class="form-control">
			</div>

			<div class="form-group">
				<label for="content">Content&nbsp:&nbsp</label>
				<input type="text" name="content" class="form-control">
			</div>

			<div class="form-group">
				<label for="file">Image&nbsp:&nbsp</label>
				<input type="file" name="file" class="form-control-file">
			</div>

			<div class="form-group">
				<label for="author">Author&nbsp:&nbsp</label>
				<input type="text" name="author" class="form-control">
			</div>
				<input type="submit" name="submit" class="btn-primary btn-lg" value="create article">
		</form>
	</section>

	</body>
</html>