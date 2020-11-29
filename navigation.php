<!-- Navigation Bar -->
	<header class="container">
		<a href="index.php" class="logo"><img src="img/logo-w.png" alt="logo"></a>
		<nav>
			<ul class="nav_links">
				<li><a href="index.php">Home</a></li>
				<li><a href="browse.php">Menu</a></li>
				<li><a href="#">Cart</a></li>
				<?php 
					if (!isset($_SESSION['email'])) {
						echo "<li><a href='register.php'>Sign up</a></li>";
					} else {
						echo "<li><a href='profile.php'>Hello, ". $_SESSION['firstname']. " ". $_SESSION['lastname']."</a></li>";
					}
				?>
			</ul>
		</nav>
	</header>