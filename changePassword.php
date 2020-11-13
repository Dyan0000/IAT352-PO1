<?php	
	// include auth.php file on all secure pages
	require_once("auth_sessionNotActiveCheck.php");

	// connect to database
	require_once('connect.php');
	$manage_errors = array();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Change Password</title>
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
				<a href="profile.php" role="button" class="btn">Cancel</a>
			</section>

			<!-- Change password -->
			<section  id="form">
				<h2>Change Your Password</h2>
				<form action="#form" method="post" class="change-form">
					<label>Current password: <input type="password" name="current_password"></label>
					<label>New password: <input type="password" name="new_password"></label>
					<label>Confirm new password: <input type="password" name="confirm_password"></label><br>
					<input type="submit" name="change_password" value="Change Password" class="btn">

				<?php
					if (isset($_POST["change_password"])) {

						$current = trim($_POST["current_password"]);
						$new = trim($_POST["new_password"]);
						$confirm = trim($_POST["confirm_password"]);
						
						// Check if three inputs are not empty
						if (!empty($current) && !empty($new) && !empty($confirm)) {

							// Check if user confirmed new password correctly
							if ($new == $confirm) {

								$current = md5($current);
								$new = md5($new);
							
								// Check if current password is correct
								if ($current == $_SESSION['password']) {

									// Perform database query - update a new password
									$query = "UPDATE users SET ";
									$query .= "password = '$new' ";
									$query .= "WHERE id =". $_SESSION['id'];
									
									$result = mysqli_query($db, $query);
									
									// Check if there is a query error
									if (!empty($result) && mysqli_affected_rows($db) == 1) {
										array_push($manage_errors, "Awesome! You have successfully set up a new password. ");
									}
									else { 
										array_push($manage_errors, "Bummer! You failed to update your new password. ");
									}

								} // end of "if ($current == $password_from_db)"
								else {
									array_push($manage_errors, "Sorry, your current password is wrong. ");
								}

							} // end of checking new password is confirm correctly
							else {
								array_push($manage_errors, "You didn't confirm your new password. Please try again. ");
							}

						} // end of checking three inputs are not empty
						else {
							array_push($manage_errors, "Please provide both your current password and new password. ");
						}
						
					}
				?>

					<!-- Display error message -->
					<?php
						if (!empty($manage_errors)) {
							foreach ($manage_errors as $error) {
								echo "<p class='error'>". $error. "</p>";
							} 
						}
					?>
				</form>
			</section>


		</div> <!-- End of the Page Content -->

		<?php include('footer.php'); ?>
		
	</body>
</html>

<?php
  // Close database connection
  mysqli_close($db);
?>