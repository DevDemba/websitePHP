<nav class="navbar navbar-dark bg-dark">
	<span class="title-nav">
	<?php if(!empty($_SESSION['user']) AND !empty($_SESSION['password']))
						{
							echo $_SESSION['login']; 
						}
						else
						{
							echo 'Connectez-vous !' ;
						}
		
		?>
	</span>
	<ul class="navbar-nav">
		<li><a href="index.php">Home</a></li>
		<li><a href="login.php">Login</a></li>
		<li><a href="admin.php">Admin</a></li>
		<li><a href="subscribe.php">Subscribe</a></li>
	</ul>
</nav>

