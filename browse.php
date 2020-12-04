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
	<script src="js/jquery-ui.js"></script>
	<link href = "css/jquery-ui.css" rel = "stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>Menu</title>
</head>

<body>

	<?php include('navigation.php'); ?>

	<section class="browse_layout">
		<section class="browse_categories">

			<div class="categories_container container" id="myBtnContainer">

				<div class="category">
					<!-- <h2 class="filter_title">Category</h2> -->
					<?php
					 $query03 = "SELECT DISTINCT category FROM dishes ORDER BY category ASC";
					 $result03 = mysqli_query($db,$query03);
					 while ($row = mysqli_fetch_assoc($result03)) {
					 	if (!empty($row['category'])) 
					 		echo "<label><input type='checkbox' class='checkbox-option category' value='". $row['category']. "'>". $row['category']. "</label>";
					 }
					?>
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
					<div id="slider_range"></div>
					<p id="display_price">$2.00 - $17.00</p> 
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


			<!-- Filtered Dishes -->
			<div class="menu_section col-2-3">
			
				<div class="filterDiv all">
					<div class="filter_data"></div>
				</div>
				
			</div>


		</section> <!-- end of main -->

	</section>

	<?php include('footer.php'); ?>


	<!-- menu item popup modal -->

	<!-- overlay -->

	<div id="overlay" class="overlay"></div>

	<div id="itemModal" class="item_modal">

		<!-- modal content -->

		<div class="modal_content">

			<span class="close">&times;</span>

			<div class="modal_img_box"><img class="modal_image" src="img/placeholder.png" alt="dish image"></div>

			<div class="modal_body">
				<div class="modal_title"></div>
				<div class="modal_description text-body-sml"></div>
				<div class="modal_price"></div>
			</div>

			<div class="modal_control">
				<!-- <div class="quantity_stepper"></div> -->
				<div class="order_bt pr_bt">Order</div>
				<?php
					if (isset($_SESSION['id'])) {
						echo "<div class='like_dish'>Like</div>";
					}
				?>
			</div>

		</div>

	</div> <!-- end of item_modal -->


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

	<!-- // <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script> -->

	<!-- For price range slider -->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script type="text/javascript" src="js/modal.js"></script>
	<script type="text/javascript" src="js/filter.js"></script>
	<script type="text/javascript" src="js/like.js"></script>

</body>
</html>

<?php mysqli_close($db); ?>

