<?php 

include 'header.php';
include 'menu.php';
include 'connexion.php';
?>

<form method='POST' class="form" action=''>
		<div class="form-group">
			<input type="text" name="login" class="form-control"  placeholder="login">
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="password">
		</div>
		<div class="form-group">
			<input type="submit" name="connexion" class="btn btn-primary" value="Log in">
		</div>

	</form>


