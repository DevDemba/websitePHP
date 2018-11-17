<!DOCTYPE html>
<html>
	<head>
		<?php include 'header.php'; ?>
		<title>subscribe</title>
	</head>
	<body>
		<header>
			<?php include 'menu.php'; ?>
			<?php include 'register.php'; ?>
		</header>

		<form method='POST' class="form" action=''>

			<div class="form-group">
				<input type="text" name="lastname" class="form-control" placeholder="lastname">	
			</div>
			<div class="form-group">
				<input type="text" name="firstname" class="form-control" placeholder="firstname">
			</div>
			<div class="form-group">
				<input type="text" name="login" class="form-control"  placeholder="login">
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="password">
			</div>
			<div class="form-group">
				<input type="submit" name="createUser" class="btn btn-primary" value="Sign up">
			</div>

		</form>

	</body>
</html>


