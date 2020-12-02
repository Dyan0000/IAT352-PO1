<?php
require_once("connect.php");
session_start();
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

	<?php include('navigation.php'); ?>

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



				<!-- <div class="container_item">
					<div class="categories_img">
						<img src="img/categories/ramen.svg">
					</div>

					<div class="categories_label">
						<p>Ramen</p>
					</div>

				</div> -->

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
						<p>Sushi</p>
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

				<!-- <div class="container_item">
					<div class="categories_img">
						<img src="img/categories/roll.svg">
					</div>

					<div class="categories_label">
						<p>Maki &amp; Roll</p>
					</div>

				</div> -->

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

					<!-- A hidden field let web developers include data that cannot be seen or modified by users when a form is submitted. -->
					<input type="hidden" id="hidden_minimum_price" value="0">
					<input type="hidden" id="hidden_maximum_price" value="16.99">
					<p id="price_show">2.00 - 16.99</p> 
					<div id="price_range"></div>

					<!-- <label>
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
					</label> -->
				</div>

				<!-- <div class="ratings">
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
				</div> -->

				<div class="dietary">
					<h2 class="filter_title">Dietary</h2>
					<label><input type="radio" name="diet_filter" value="*" checked="checked">All</label>
					<!-- <label><input type="radio" name="diet_filter" value="gluten-free">Gluten-free</label> -->
					<label><input type="radio" name="diet_filter" value="vegeterian">Vegeterian</label>
					<label><input type="radio" name="diet_filter" value="no-soy">No Soy</label>
					<label><input type="radio" name="diet_filter" value="no-peanut">No Peanut</label>
				</div>

			</div>

			<div class="menu_section col-2-3">





				<!-- starters -->

				<div class="list_title">
					<h1 class="heading2">Starters</h1>
				</div>


				<div class="menu_list grid">

				<?php


				function get_starters(){
					global $db;
					$ret = array();
					$sql = "SELECT * FROM dishes WHERE category='Starters'";
					$result = mysqli_query($db, $sql);

					while($ar = mysqli_fetch_assoc($result)){
						$ret[] = $ar;


						echo '
						<div id="menuItem" class="menu_item">

						<div class="item_image">
							<img src=" '.$ar['img_path'].' " alt="food image">
						</div>

						<div class="item_text">
							<div class="item_name"> '.$ar['name'].' </div>
							<div class="item_description text-body-sml"> '.$ar['description'].' </div>
							<div class="item_price"> '.$ar['unit_price'].' </div>
						</div>

					</div>';
					}
					return $ret;


				}
				$dishes = get_starters();

				?>


				</div>

				<!-- Donburi -->
				<div class="list_title">
					<h1 class="heading2">Donburi</h1>
				</div>

				<div class="menu_list grid">

				<?php


				function get_donburi(){
					global $db;
					$ret = array();
					$sql = "SELECT * FROM dishes WHERE category='Donburi'";
					$result = mysqli_query($db, $sql);

					while($ar = mysqli_fetch_assoc($result)){
						$ret[] = $ar;


						echo '
						<div id="menuItem" class="menu_item">

						<div class="item_image">
							<img src=" '.$ar['img_path'].' " alt="food image">
						</div>

						<div class="item_text">
							<div class="item_name"> '.$ar['name'].' </div>
							<div class="item_description text-body-sml"> '.$ar['description'].' </div>
							<div class="item_price"> '.$ar['unit_price'].' </div>
						</div>

					</div>';
					}
					return $ret;


				}
				$dishes = get_donburi();

				?>


				</div>

				<!-- Sashimi -->
				<div class="list_title">
					<h1 class="heading2">Sashimi</h1>
				</div>

				<div class="menu_list grid">

				<?php


				function get_sashimi(){
					global $db;
					$ret = array();
					$sql = "SELECT * FROM dishes WHERE category='Sashimi'";
					$result = mysqli_query($db, $sql);

					while($ar = mysqli_fetch_assoc($result)){
						$ret[] = $ar;


						echo '
						<div id="menuItem" class="menu_item">

						<div class="item_image">
							<img src=" '.$ar['img_path'].' " alt="food image">
						</div>

						<div class="item_text">
							<div class="item_name"> '.$ar['name'].' </div>
							<div class="item_description text-body-sml"> '.$ar['description'].' </div>
							<div class="item_price"> '.$ar['unit_price'].' </div>
						</div>

					</div>';
					}
					return $ret;


				}
				$dishes = get_sashimi();

				?>


				</div>

				<!-- Sushi -->
				<div class="list_title">
					<h1 class="heading2">Sushi</h1>
				</div>

				<div class="menu_list grid">

				<?php


				function get_sushi(){
					global $db;
					$ret = array();
					$sql = "SELECT * FROM dishes WHERE category='Sushi'";
					$result = mysqli_query($db, $sql);

					while($ar = mysqli_fetch_assoc($result)){
						$ret[] = $ar;


						echo '
						<div id="menuItem" class="menu_item">

						<div class="item_image">
							<img src=" '.$ar['img_path'].' " alt="food image">
						</div>

						<div class="item_text">
							<div class="item_name"> '.$ar['name'].' </div>
							<div class="item_description text-body-sml"> '.$ar['description'].' </div>
							<div class="item_price"> '.$ar['unit_price'].' </div>
						</div>

					</div>';
					}
					return $ret;


				}
				$dishes = get_sushi();

				?>


				</div>


				<!-- Tempura -->
				<div class="list_title">
					<h1 class="heading2">Tempura</h1>
				</div>

				<div class="menu_list grid">

				<?php


				function get_tempura(){
					global $db;
					$ret = array();
					$sql = "SELECT * FROM dishes WHERE category='Tempura'";
					$result = mysqli_query($db, $sql);

					while($ar = mysqli_fetch_assoc($result)){
						$ret[] = $ar;


						echo '
						<div id="menuItem" class="menu_item">

						<div class="item_image">
							<img src=" '.$ar['img_path'].' " alt="food image">
						</div>

						<div class="item_text">
							<div class="item_name"> '.$ar['name'].' </div>
							<div class="item_description text-body-sml"> '.$ar['description'].' </div>
							<div class="item_price"> '.$ar['unit_price'].' </div>
						</div>

					</div>';
					}
					return $ret;


				}
				$dishes = get_tempura();

				?>


				</div>


				<!-- Drinks -->
				<div class="list_title">
					<h1 class="heading2">Drinks</h1>
				</div>

				<div class="menu_list grid">

				<?php


				function get_drinks(){
					global $db;
					$ret = array();
					$sql = "SELECT * FROM dishes WHERE category='Drinks'";
					$result = mysqli_query($db, $sql);

					while($ar = mysqli_fetch_assoc($result)){
						$ret[] = $ar;


						echo '
						<div id="menuItem" class="menu_item">

						<div class="item_image">
							<img src=" '.$ar['img_path'].' " alt="food image">
						</div>

						<div class="item_text">
							<div class="item_name"> '.$ar['name'].' </div>
							<div class="item_description text-body-sml"> '.$ar['description'].' </div>
							<div class="item_price"> '.$ar['unit_price'].' </div>
						</div>

					</div>';
					}
					return $ret;


				}
				$dishes = get_drinks();

				?>


				</div>

			</div>


		</section>

	</section>

	<?php include('footer.php'); ?>

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

	<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
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

<?php mysqli_close($db); // Close database connection ?>

