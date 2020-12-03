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

			<div class="categories_container container" id="myBtnContainer">

				<div class="container_item">
				<button class="btn active" onclick="filterSelection('sstarters')"> 
					<div class="categories_img">
						<img src="img/categories/starters.svg">
					</div>
					<div class="categories_label">
						<p>Starters</p>

					</div>
				</button>

				

				</div>


				<div class="container_item">
				<button class="btn" onclick="filterSelection('ddonburi')"> 
					<div class="categories_img">
						<img src="img/categories/donburi.svg">
					</div>

					<div class="categories_label">
						<p>Donburi</p>
					</div>
				</button>
				</div>

				<div class="container_item">
				<button class="btn" onclick="filterSelection('ssashimi')">
					<div class="categories_img">
						<img src="img/categories/sashimi.svg">
					</div>

					<div class="categories_label">
						<p>Sashimi</p>
					</div>
				</button>
				</div>

				<div class="container_item">
				<button class="btn" onclick="filterSelection('ssushi')">
					<div class="categories_img">
						<img src="img/categories/nigiri.svg">
					</div>

					<div class="categories_label">
						<p>Sushi</p>
					</div>
				</button>
				</div>

				<div class="container_item">
				<button class="btn" onclick="filterSelection('ttempura')">
					<div class="categories_img">
						<img src="img/categories/tempura.svg">
					</div>

					<div class="categories_label">
						<p>Tempura</p>
					</div>
				</button>
				</div>

				<div class="container_item">
				<button class="btn" onclick="filterSelection('ddrinks')">
					<div class="categories_img">
						<img src="img/categories/drinks.svg">
					</div>

					<div class="categories_label">
						<p>Drinks</p>
					</div>
				</button>
				</div>
				
			</div>

		</section>


		<section class="main">

			<!-- Filter Section -->

			<div class="filter_section col-1-3">

				<h1 class="heading2">Sort by</h1>

				<div class="price_range">
					<h2 class="filter_title">Price Range</h2>
					<!-- A hidden field let web developers include data that cannot be seen or modified by users when a form is submitted. -->
					<input type="hidden" id="hidden_minimum_price" value="0">
					<input type="hidden" id="hidden_maximum_price" value="17">
					<p id="display_price">2.00 - 17.00</p> 
					<div id="slider_range"></div>
				</div>

				<div class="meat">
					<h2 class="filter_title">Meat</h2>
					<?php
					 $query01 = "SELECT DISTINCT meat FROM dishes ORDER BY meat ASC";
					 $result01 = mysqli_query($db,$query01);
					 while ($row = mysqli_fetch_assoc($result01)) {
					 	if (!empty($row['meat'])) 
					 		echo "<label><input type='checkbox' class='checkbox-option meat' value='". $row['meat']. "'>". $row['meat']. "</label>";
					 }
					?>
				</div>

				<div class="dietary">
					<h2 class="filter_title">Dietary</h2>
					<?php
					 $query02 = "SELECT DISTINCT dietary FROM dishes ORDER BY dietary ASC";
					 $result02 = mysqli_query($db,$query02);
					 while ($row = mysqli_fetch_assoc($result02)) {
					 	if (!empty($row['dietary'])) 
					 		echo "<label><input type='checkbox' class='checkbox-option dietary' value='". $row['dietary']. "'>". $row['dietary']. "</label>";
					 }
					?>
				</div>

			</div> <!-- end of filter_section -->



			<div class="menu_section col-2-3">
			<div class="filterDiv all">
				<div class="filter_data"></div>

				<hr />
			</div>
				<!-- starters -->
				<div class="filterDiv sstarters">
				<div class="list_title">
					<h1 class="heading2" id="Starters">Starters</h1>
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
				</div>
				<!-- Donburi -->
				<div class="filterDiv ddonburi">
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
				</div>

				<!-- Sashimi -->
				<div class="filterDiv ssashimi">
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
				</div>

				<!-- Sushi -->
				<div class="filterDiv ssushi">
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
				</div>

				<!-- Tempura -->
				<div class="filterDiv ttempura">
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
				</div>

				<!-- Drinks -->
				<div class="filterDiv ddrinks">
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

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

	<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="js/filter.js"></script>

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
			$(".item_modal").hide(); 

		});
	</script>



</body>
</html>

<?php mysqli_close($db); ?>

