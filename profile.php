<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Profile</title>
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/home.css">
	</head>

	<body>
		
		<!-- Navigation Bar -->
		<header class="container">
			<img src="img/placeholder.png" alt="logo" class="logo">
			<nav>
				<ul class="nav_links">
					<li><a href="index.php">Home</a></li>
					<li><a href="menus.php">Menu</a></li>
					<li><a href="#">Cart</a></li>
				</ul>
			</nav>
			<a href="index.php" class="sign-in">Sign out</a>
		</header>


		<!-- Page Content -->
		<div class="profile-page-content">

		<!-- Profile -->
		<section class="container account">
			<img src="img/placeholder.png" alt="profile image" class="account-img">
			<div class="account-info">
				<p class="name">John Doe</p>
				<p>johndoe@gamil.com</p>
				<p class="points">Points: 100</p>
			</div>
			<a href="#" role="button" class="btn">Manage Account</a>
		</section>

		<!-- Discounts -->
		<section>
			<h2>Weekly Member Discounts</h2>
			<div class="container popular">
				<div class="item"><img src="img/placeholder.png"></div>
				<div class="item"><img src="img/placeholder.png"></div>
				<div class="item"><img src="img/placeholder.png"></div>
			</div>
		</section>

		<!-- Favourite Dishes -->
		<section>
			<h2>Facourite Dishes</h2>
			<div class="container favourite">
				<div class="item"><img src="img/placeholder.png"></div>
				<div class="item"><img src="img/placeholder.png"></div>
				<div class="item"><img src="img/placeholder.png"></div>
				<div class="item"><img src="img/placeholder.png"></div>
				<div class="item"><img src="img/placeholder.png"></div>
				<div class="item"><img src="img/placeholder.png"></div>
			</div>
		</section>

		<!-- Past Orders -->
		<section class="past-orders">
			<h2>Past Orders</h2>
			<div class="container past-order-box">
				<div>
					<h3>Jan 04 at 6:30 PM</h3>
					<p class="order-item"><span class="order-number">2</span> Alaska Roll</p>
					<p class="order-item"><span class="order-number">1</span> Salmon Sashimi</p>
					<p class="order-item"><span class="order-number">2</span> Bento Box B</p>
				</div>
				<div>
					<a href="#" role="button" class="btn">Reorder</a>
					<p class="right-align">$33.99</p>
					<p class="right-align"><a href="menu.php" class="link">View receipt >></a></p>
				</div>
			</div>
		</section>

	</div> <!-- End of the Page Content -->

	</body>
</html>