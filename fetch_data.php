<?php
session_start();
include('connect.php');


if (isset($_POST['action'])) {
	
	$sql = "SELECT * FROM dishes ";
	$length = strlen($sql);
	
	if (isset($_POST['minimum_price'], $_POST['maximum_price']) &&
		!empty($_POST['minimum_price']) && !empty($_POST['maximum_price'])) {
		$sql .= "WHERE unit_price BETWEEN ".$_POST["minimum_price"]." AND ".$_POST["maximum_price"]." ";
	}

	if (isset($_POST['meat'])) {
		$meat_filter = implode("','", $_POST["meat"]);
		if (strlen($sql) == $length) $sql .= "WHERE ";
		else $sql .= "AND ";
		$sql .= "meat IN ('". $meat_filter. "') ";
	}

	if (isset($_POST['dietary'])) {
		$dietary_filter = implode("','", $_POST["dietary"]);
		if (strlen($sql) == $length) $sql .= "WHERE ";
		else $sql .= "AND ";
		$sql .= "dietary IN ('". $dietary_filter. "') ";
	}
	// echo $sql;
	$result = mysqli_query($db, $sql);
	if (!$result) die("!! Database query failed !!");

	$num_results = mysqli_num_rows($result);

	if ($num_results > 0) {
		$output = "<div class='menu_list grid'>";
		while ($row = mysqli_fetch_assoc($result)) { // a row of data for one dish
			$output .= "
			<div id='menuItem' class='menu_item'>

				<div class='item_image'>
					<img src='".$row['img_path']."' alt='dish image'>
				</div>

				<div class='item_text'>
					<div class='item_name'>".$row['name']."</div>
					<div class='item_description text-body-sml'>".$row['description']."</div>
					<div class='item_price'>".$row['unit_price']."</div>
				</div>

			</div>
			";
		}
		$output .= "</div>";
	} else {
		$output = "<h2>Dear ";
		if (isset($_SESSION['id'])) {
			$output .= $_SESSION['firstname']." ".$_SESSION['lastname'].", ";
		} else {
			$output .= "Customer, ";
		}
		$output .= "</h2>";
		$output .= "<p>We're so sorry there is no dish satisfying your preferences. Please try other choices.</p>";
	}
	echo $output;
}

mysqli_free_result($result);
mysqli_close($db);
?>