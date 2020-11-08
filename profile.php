<?php
//include auth.php file on all secure pages
include("auth_sessionNotActiveCheck.php");
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Profile</title>
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link rel="stylesheet" type="text/css" href="css/home.css">
	</head>

	<body>
		
		<!-- Navigation Bar -->
		<header class="container">
			<a href="index.php" class="logo"><img src="img/logo-w.png" alt="logo"></a>
			<nav>
				<ul class="nav_links">
					<li><a href="index.php">Home</a></li>
					<li><a href="browse.php">Menu</a></li>
					<li><a href="#">Cart</a></li>
				</ul>
			</nav>
			<a href="logout.php" class="sign-in" >Sign out</a>
		</header>


		<!-- Page Content -->
		<div class="profile-page-content">

		<!-- Profile -->
		<section class="container account">
			<img src="img/profile.jpg" alt="profile image" class="account-img">
			<div class="account-info">
				<p class="name">Alexandra</p>
				<p><?php echo$_SESSION['email'] ?></p>
				<p class="points">Points: 100</p>
			</div>
			<a href="#" role="button" class="btn">Manage Account</a>
		</section>

		<!-- Discounts -->
		<section>
			<h2>Weekly Member Discounts</h2>
			<div class="container popular">
				<div class="item"><img src="img/member-discounts/discount-03.png"></div>
				<div class="item"><img src="img/member-discounts/discount-01.png"></div>
				<div class="item"><img src="img/member-discounts/discount-02.png"></div>
			</div>
		</section>

		<!-- Favourite Dishes -->
		<section>
			<h2>Favourite Dishes</h2>
			<div class="container favourite">
				<div class="item"><img src="img/salad/seafood.jpeg"></div>
				<div class="item"><img src="img/salad/spicy-salmon.jpeg"></div>
				<div class="item"><img src="img/tempura/prawn.jpeg"></div>
			</div>
			<div class="container favourite">
				<div class="item"><img src="img/sashimi/salmon.jpeg"></div>
				<div class="item"><img src="img/donburi/kimchi.jpg"></div>
				<div class="item"><img src="img/donburi/mushroom.jpeg"></div>
			</div>
		</section>

		<!-- Past Orders -->
		<section class="past-orders">
			<h2>Past Orders</h2>
			<div class="container past-order-box">
				<div>
					<h3>Jan 04 at 6:30 PM</h3>
					<p class="order-item"><span class="order-number">2</span> Tuna Sashimi Don</p>
					<p class="order-item"><span class="order-number">3</span> Spicy Bibim Gyoza</p>
					<p class="order-item"><span class="order-number">1</span> Seafood Salad</p>
				</div>
				<div>
					<a href="#" role="button" class="btn">Reorder</a>
					<p class="right-align">$33.99</p>
					<p class="right-align"><a href="#" class="link">View receipt >></a></p>
				</div>
			</div>
			<div class="container past-order-box">
				<div>
					<h3>Mar 24 at 11:30 AM</h3>
					<p class="order-item"><span class="order-number">2</span> Tuna Sashimi Don</p>
					<p class="order-item"><span class="order-number">1</span> Tako Yaki</p>
					<p class="order-item"><span class="order-number">3</span> Seaweed Salad</p>
				</div>
				<div>
					<a href="#" role="button" class="btn">Reorder</a>
					<p class="right-align">$41.20</p>
					<p class="right-align"><a href="#" class="link">View receipt >></a></p>
				</div>
			</div>
		</section>

		</div> <!-- End of the Page Content -->

		<!-- Footer -->
		<footer class="container">
			<img src="img/logo-full-w.png" alt="logo" class="item">
			<div class="item">
				<h2>Follow us</h2>
				<div class="container social-media">
					<a href="https://www.facebook.com/" target="_blank" class="item"><img src="img/social-media/facebook.png" alt="facebook"></a>
					<a href="https://www.instagram.com/" target="_blank" class="item"><img src="img/social-media/ins.png" alt="instagram"></a>
					<a href="https://twitter.com/" target="_blank" class="item"><img src="img/social-media/twitter.png" alt="twitter"></a>
				</div>
			</div>
			<div class="item">
				<h2>Contact us</h2>
				<p>Phone: +1 866-666-8888<br>
				Email: yo!sushi@gmail.com</p>
			</div>
			<div class="item">
				<h2>Find us</h2>
				<p>888 Pender St 2nd floor,<br>
					Vancouver, BC V6B 6N9
				</p>
			</div>
		</footer>
		
	</body>
</html>