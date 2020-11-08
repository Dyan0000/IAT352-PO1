<?php
//include auth.php file on all secure pages
include("auth_sessionNotActiveCheck.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/browse.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>Menu</title>
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
				<?php if (!isset($_SESSION['email'])) {
					echo "<li> <a class='sign-in'  href='register.php'>Sign up</a></li>";
				} else {
					echo
						"<li><a  href='profile.php'> Profile </a></li>";
				}
				?>
			</ul>
		</nav>

	</header>

	<section class="browse_layout">
		<section class="browse_categories">

			<div class="categories_container container">

				<div class="container_item">
					<div class="categories_img">
						<img src="img/categories/starters.svg">
					</div>

					<div class="categories_label">
						<p>Starters</p>
					</div>

				</div>




				<div class="container_item">
					<div class="categories_img">
						<img src="img/categories/donburi.svg">
					</div>

					<div class="categories_label">
						<p>Donburi</p>
					</div>

				</div>



				<div class="container_item">
					<div class="categories_img">
						<img src="img/categories/ramen.svg">
					</div>

					<div class="categories_label">
						<p>Ramen</p>
					</div>

				</div>

				<div class="container_item">
					<div class="categories_img">
						<img src="img/categories/sashimi.svg">
					</div>

					<div class="categories_label">
						<p>Sashimi</p>
					</div>

				</div>

				<div class="container_item">
					<div class="categories_img">
						<img src="img/categories/nigiri.svg">
					</div>

					<div class="categories_label">
						<p>Nigiri</p>
					</div>

				</div>

				<div class="container_item">
					<div class="categories_img">
						<img src="img/categories/tempura.svg">
					</div>

					<div class="categories_label">
						<p>Tempura</p>
					</div>

				</div>

				<div class="container_item">
					<div class="categories_img">
						<img src="img/categories/roll.svg">
					</div>

					<div class="categories_label">
						<p>Maki &amp; Roll</p>
					</div>

				</div>

				<div class="container_item">
					<div class="categories_img">
						<img src="img/categories/drinks.svg">
					</div>

					<div class="categories_label">
						<p>Drinks</p>
					</div>

				</div>



		</section>

		<section class="main">

			<div class="filter_section col-1-3">

				<h1 class="heading2">Sort by</h1>

				<div class="price_range">
					<h2 class="filter_title">Price Range</h2>

					<label>
						<input type="radio" name="price_filter" value="*" checked="checked">All
					</label>

					<label>
						<input type="radio" name="price_filter" value="*">&#36;0-&#36;5
					</label>

					<label>
						<input type="radio" name="price_filter" value="*">&#36;5-&#36;10
					</label>

					<label>
						<input type="radio" name="price_filter" value="*">&#36;10-&#36;15
					</label>

					<label>
						<input type="radio" name="price_filter" value="*">&#36;15-&#36;20
					</label>

					<label>
						<input type="radio" name="price_filter" value="*">&#36;20+
					</label>




				</div>

				<div class="ratings">
					<h2 class="filter_title">Ratings</h2>

					<label>
						<input type="radio" name="rating_filter" value="*" checked="checked">Any
					</label>


					<label>
						<input type="radio" name="rating_filter" value="gluten-free">&#10029;&#10029;&#10025;&#10025;&#10025;
					</label>

					<label>
						<input type="radio" name="rating_filter" value="vegeterian">&#10029;&#10029;&#10029;&#10025;&#10025;
					</label>

					<label>
						<input type="radio" name="rating_filter" value="no-soy">&#10029;&#10029;&#10029;&#10029;&#10025;
					</label>

					<label>
						<input type="radio" name="rating_filter" value="no-peanut">&#10029;&#10029;&#10029;&#10029;&#10029;
					</label>

				</div>

				<div class="dietary">
					<h2 class="filter_title">Dietary</h2>

					<label>
						<input type="radio" name="diet_filter" value="*" checked="checked">All
					</label>

					<label>
						<input type="radio" name="diet_filter" value="gluten-free">Gluten-free
					</label>

					<label>
						<input type="radio" name="diet_filter" value="vegeterian">Vegeterian
					</label>

					<label>
						<input type="radio" name="diet_filter" value="no-soy">No soy
					</label>

					<label>
						<input type="radio" name="diet_filter" value="no-peanut">No peanut
					</label>

				</div>

			</div>

			<div class="menu_section col-2-3">


				<!-- starters -->
				<div class="list_title">
					<h1 class="heading2">Starters</h1>
				</div>


				<div class="menu_list grid">



					<div id="menuItem" class="menu_item">

						<div class="item_image">
							<img src="img/starters/tomato-kimchi.jpeg" alt="food image">
						</div>

						<div class="item_text">
							<div class="item_name">Tomato Kimchi</div>
							<div class="item_description text-body-sml">Sweet and spicy tomato salad</div>
							<div class="item_price">$4.99</div>
						</div>

					</div>

					<div id="menuItem" class="menu_item">

						<div class="item_image">
							<img src="img/starters/spicy-gyoza.jpeg" alt="food image">
						</div>

						<div class="item_text">
							<div class="item_name">Spicy Gyoza</div>
							<div class="item_description text-body-sml">Deep fried gyoza mixed with greens feat Korean style spicy sauce.</div>
							<div class="item_price">$6.99</div>
						</div>

					</div>

					<div id="menuItem" class="menu_item">

						<div class="item_image">
							<img src="img/starters/edamame.jpeg" alt="food image">
						</div>

						<div class="item_text">
							<div class="item_name">Edamame</div>
							<div class="item_description text-body-sml">Steamed and seasoned with salt</div>
							<div class="item_price">$2.99</div>
						</div>

					</div>

					<div id="menuItem" class="menu_item">

						<div class="item_image">
							<img src="img//starters/tako-yaki.jpeg" alt="food image">
						</div>

						<div class="item_text">
							<div class="item_name">Takoyaki</div>
							<div class="item_description text-body-sml">Filled with diced octopus, tempura scraps, pickled ginger, and green onion.</div>
							<div class="item_price">$7.99</div>
						</div>

					</div>

				</div>

				<!-- Donburi -->
				<div class="list_title">
					<h1 class="heading2">Donburi</h1>
				</div>


				<div class="menu_list grid">



					<div id="menuItem" class="menu_item">

						<div class="item_image">
							<img src="img/donburi/chashu.jpg" alt="food image">
						</div>

						<div class="item_text">
							<div class="item_name">Chashu Don</div>
							<div class="item_description text-body-sml">Japanese style braised pork rice feat. hatcho miso sauce and mustard mayo</div>
							<div class="item_price">$14.99</div>
						</div>

					</div>

					<div id="menuItem" class="menu_item">

						<div class="item_image">
							<img src="img/donburi/kimchi.jpg" alt="food image">
						</div>

						<div class="item_text">
							<div class="item_name">Kimchi Don</div>
							<div class="item_description text-body-sml">Korean style pan fried kimchi and bacon.</div>
							<div class="item_price">$13.99</div>
						</div>

					</div>

					<div id="menuItem" class="menu_item">

						<div class="item_image">
							<img src="img/donburi/mushroom.jpeg" alt="food image">
						</div>

						<div class="item_text">
							<div class="item_name">Mushroom Don</div>
							<div class="item_description text-body-sml">Mushroom "Shiitake and shimeji" rice in hot stone bowl seaweed "Nori" sauce.</div>
							<div class="item_price">$16.99</div>
						</div>

					</div>

					<div id="menuItem" class="menu_item">

						<div class="item_image">
							<img src="img//donburi/salmon.jpeg" alt="food image">
						</div>

						<div class="item_text">
							<div class="item_name">Salmon Sashimi Don</div>
							<div class="item_description text-body-sml">Sushi rice topped with 8 pieces of fresh Salmon sashimi.</div>
							<div class="item_price">$15.99</div>
						</div>

					</div>

					<div id="menuItem" class="menu_item">

						<div class="item_image">
							<img src="img//donburi/unagi.jpeg" alt="food image">
						</div>

						<div class="item_text">
							<div class="item_name">Unagi Don</div>
							<div class="item_description text-body-sml">Sushi rice topped with Unagi.</div>
							<div class="item_price">$18.99</div>
						</div>

					</div>

				</div>

			</div>


		</section>

	</section>

	<!-- footer -->
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


	<!-- menu item popup modal -->

	<!-- overlay -->

	<div id="overlay" class="overlay"></div>

	<div id="itemModal" class="item_modal">

		<!-- modal content -->

		<div class="modal_content">

			<span class="close">&times;</span>


			<img class="modal_image" src="img/placeholder.png">


			<div class="modal_body">
				<div class="modal_title"></div>
				<div class="modal_description text-body-sml"></div>
				<div class="modal_price"></div>
			</div>

			<div class="modal_control">

				<div class="quantity_stepper"></div>
				<div class="order_bt pr_bt">Order</div>
			</div>

		</div>


	</div>


	<script type="text/javascript">
		// modal content

		$(".menu_item").click(function() {
			$(".item_modal").find(".modal_title").text($(this).find(".item_name").text());
			$(".item_modal").find(".modal_description").text($(this).find(".item_description").text());
			$(".item_modal").find(".modal_price").text($(this).find(".item_price").text());
			$(".item_modal").find(".modal_image").attr("src", $(this).find(".item_image img").attr("src"));


			$(".overlay").show();
			$(".item_modal").show();
		});

		$(".close").click(function() {
			$(".overlay").hide();
			$(".item_modal").hide(); //Hide pop up

		});











		// // get overlay

		// var overlay = document.getElementById("overlay");

		// // get modal
		// var modal = document.getElementById("itemModal");

		// // menu item as trigger
		// var menuItem = document.getElementsByClassName("menu_item")[0];
		// var menuItem1 = document.getElementsByClassName("menu_item")[1];
		// var menuItem2 = document.getElementsByClassName("menu_item")[2];
		// var menuItem3 = document.getElementsByClassName("menu_item")[3];

		// // close the modal

		// var x_button = document.getElementsByClassName("close")[0];

		// // when user clicks menu item

		// menuItem.onclick = function(){
		// 	overlay.style.display = "block";
		// 	modal.style.display = "block";
		// }
		// menuItem1.onclick = function(){
		// 	overlay.style.display = "block";
		// 	modal.style.display = "block";
		// }
		// menuItem2.onclick = function(){
		// 	overlay.style.display = "block";
		// 	modal.style.display = "block";
		// }
		// menuItem3.onclick = function(){
		// 	overlay.style.display = "block";
		// 	modal.style.display = "block";
		// }

		// // when user clicks close button

		// x_button.onclick = function(){
		// 	overlay.style.display = "none";
		// 	modal.style.display = "none";
		// }

		// // when user clicks outside of the modal
		// overlay.onclick = function(event){
		// 	if(event.target == overlay){
		// 		overlay.style.display = "none";
		// 		modal.style.display = "none";
		// 	}
		// }
	</script>




</body>

</html>