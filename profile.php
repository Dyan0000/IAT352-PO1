<?php	
	// include auth.php file on all secure pages
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
					<li><a href="logout.php">Sign out</a></li>
				</ul>
			</nav>
		</header>


		<!-- Page Content -->
		<div class="profile-page-content">

		<!-- Profile -->
		<section class="container account">
			<img src="img/profile.jpg" alt="profile image" class="account-img">
			<div class="account-info">
				<p class="name"><?php echo $_SESSION['firstname']. " ". $_SESSION['lastname'] ?></p>
				<p>Email: <?php echo $_SESSION['email'] ?></p>
				<!-- <p class="points">Points: 100</p> -->
			</div>
			<div>
				<a href="changePassword.php" role="button" class="btn">Change Password</a>
				<a href="manageAccount.php" role="button" class="btn">Manage Account</a>
			</div>
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
					<p class="right-align"><a href="#" class="link">View receipt &gt;&gt;</a></p>
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
					<p class="right-align"><a href="#" class="link">View receipt &gt;&gt;</a></p>
				</div>
			</div>
		</section>

		</div> <!-- End of the Page Content -->

		<?php include('footer.php'); ?>
		
	</body>
</html>