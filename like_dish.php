<?php
session_start();
include('connect.php');

if (isset($_POST['action'])) {

	$search_sql = "SELECT dish_id, category FROM dishes WHERE name = ". $_POST["dish_name"]. ";";
	$search_result = mysqli_query($db, $search_sql);

	if ($search_result) {

		while ($row = mysqli_fetch_assoc($search_result)) {
			$insert_sql = "INSERT INTO like_dish ('id', 'dish_id', 'category') ";
			$insert_sql .= "VALUES ('". $_SESSION['id']. "', '". $row['dish_id']. "', '". $row['category']. "');";
			mysqli_query($db, $insert_sql);
		}

	} else {
		die("!! Search query failed !!");
	}

	

}

?>