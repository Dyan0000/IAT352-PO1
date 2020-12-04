<?php
session_start();
include('connect.php');

if (isset($_POST['action'])) {

	$search_sql = "SELECT dish_id, category FROM dishes WHERE name = '". $_POST['dish_name']. "'";
	$search_result = mysqli_query($db, $search_sql);
	$num_result = mysqli_num_rows($search_result);
	
	if ($num_result > 0) {

		// If users start to like this dish, add this data to the like_dish table
		if ($_POST['if_like'] == "Like This") {
			while ($row = mysqli_fetch_assoc($search_result)) {
				$insert_sql = "INSERT INTO like_dish (`id`, `dish_id`, `category`) ";
				$insert_sql .= "VALUES ('". $_SESSION['id']. "', '". $row['dish_id']. "', '". $row['category']. "');";
				mysqli_query($db, $insert_sql);
			}
			echo "Don't Like This";
		} else {
			// If users don't like this dish any more, remove this data from the like_dish table
			while ($row = mysqli_fetch_assoc($search_result)) {
				$delete_sql = "DELETE FROM like_dish WHERE ";
				$delete_sql .= "id = '". $_SESSION['id']. "' AND dish_id = '". $row['dish_id']."';";
				echo "Like This";
			}
		}

	} else {
		die("!! Search query failed !!");
	}
}

?>