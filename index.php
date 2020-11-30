<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>

<body>

	<?php include('navigation.php'); ?>

	<!-- Banner Image -->
	<section class="banner-container">
		<img src="img/banner-edited.png" alt="banner" class="banner">
		<div class="banner-content">
			<!-- <h1>Yo! Sushi</h1> -->
			<img src="img/logo-full-w.png" alt="Yo! Sushi">
			<h2>We bring the sushi to your door.</h2>
			<a href="browse.php" role="button" class="btn">Order Now</a>
		</div>
	</section>

	<!-- Recommendations for Registered Members -->
	<?php
		include('connect.php');
		$query = "SELECT dishes.img_path, dishes.name FROM dishes ";
		$query .= "INNER JOIN like_dish ON dishes.category = like_dish.category ";
		$query .= "WHERE like_dish.id = ". $_SESSION['id']. ";";
		// echo $query;
		$query_result = mysqli_query($db, $query);
		if (!$query_result) die("Database query failed.");
		$num_rows = mysqli_num_rows($query_result); // check the number of retrieved data

		if(isset($_SESSION['id']) && $num_rows > 0) {
	
			echo "<section><h2>You Might Like</h2><div class='container what-we-have'>";

			$count = 0;
			while ($row = mysqli_fetch_assoc($query_result)) {
				if ($count < 5) {
					echo "<figure class='item'>";
					echo "<img src='". $row['img_path']. "'>";
					echo "<figcaption class='home-category'>". $row['name']. "</figcaption>";
					echo "</figure>";
				}
				$count++;
			}
			echo "</div></section>";
			mysqli_free_result($query_result); // Release returned data
		}
	?>

	<!-- Popular Dishes -->
	<section>
		<h2>Popular Dishes</h2>
		<div class="container popular">
			<div class="item"><img src="img/sushi/salmon.jpeg"></div>
			<div class="item"><img src="img/sushi/hotate.jpeg"></div>
			<div class="item"><img src="img/sushi/aburi-tobiko.jpeg"></div>
		</div>
	</section>

	<!-- What We Have -->
	<section>
		<div class="container what-we-have-title">
			<h2>What We Have</h2>
			<p><a href="browse.php" class="link">View all >></a></p>
		</div>
		<div class="container what-we-have">
			<figure class="item">
				<a href="browse.php"><img src="img/starters/spicy-gyoza.jpeg"></a>
				<figcaption class="home-category">Starters</figcaption>
			</figure>
			<figure class="item">
				<a href="browse.php"><img src="img/salad/seafood.jpeg"></a>
				<figcaption class="home-category">Salad</figcaption>
			</figure>
			<figure class="item">
				<a href="browse.php"><img src="img/sashimi/salmon.jpeg"></a>
				<figcaption class="home-category">Sashimi</figcaption>
			</figure>
			<figure class="item">
				<a href="browse.php"><img src="img/sushi/yukke-tuna.jpg"></a>
				<figcaption class="home-category">Sushi</figcaption>
			</figure>
			<figure class="item">
				<a href="browse.php"><img src="img/tempura/appetizer.jpeg"></a>
				<figcaption class="home-category">Tempura</figcaption>
			</figure>
		</div>
	</section>

	<!-- Who We Are -->
	<section>
		<h2>Who We Are</h2>
		<div class="container who-we-are">
			<p class="item">
				In the very heart of downtown Vancouver, we have been welcome to restaurant guests from all over the world, for over 20 years. We give the first priority to the taste of ingredients, while exploring our own unique Japanese cuisine based on Teppanyaki style. Now after celebrating 20 years of the restaurant, we will continue to put together our experience, passion and technique to bring your table the most succulent dishes, all cut, prepared and served to perfection.
			</p>
			<img src="img/who-we-are.jpg" alt="who we are" class="item">
		</div>
	</section>

	<?php include('footer.php'); ?>

</body>

</html>

<?php mysqli_close($db); // Close database connection ?>

