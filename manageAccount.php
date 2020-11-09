<?php	
	// include auth.php file on all secure pages
	include("auth_sessionNotActiveCheck.php");
?>

<?php
	$update_errors = array();

  // Create a database connection
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "dan_peng";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " .
         mysqli_connect_error() .
         " (" . mysqli_connect_errno() . ")"
    );
  }
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

			<!-- Manage account -->
			<?php
			  $userID = $_SESSION['id'];
			  $sql_01 = "SELECT * FROM users WHERE id = ". $userID;
			  $sql01_result = mysqli_query($connection, $sql_01);
			  $user_info = mysqli_fetch_assoc($sql01_result);

			 //  foreach($user_info as $value) {
				//   echo "Value=" . $value;
				//   echo "<br>";
				// }
			?>

			<section  id="form">
				<h2>Your Account Information:</h2>
				<form action="#form" method="post" class="change-form">
					<label>First name: <input type="text" name="new_firstname" value="<?php echo $user_info['firstname'] ?>"></label>
					<label>Last name: <input type="text" name="new_lastname" value="<?php echo $user_info['lastname'] ?>"></label>
					<label>Email: <input type="email" name="new_email" value="<?php echo $user_info['email'] ?>"></label>
					<input type="submit" name="update" value="Update Account" class="btn">

				<?php
				  if (isset($_POST['update'])) {

				  	// Get the form values and sanitize them
				  	$firstname = mysqli_real_escape_string($connection, $_POST['new_firstname']);
						$lastname = mysqli_real_escape_string($connection, $_POST['new_lastname']);
						$email = mysqli_real_escape_string($connection, $_POST['new_email']);

						// Check if the variable $email is a valid email address
						$check_email = filter_var($email, FILTER_VALIDATE_EMAIL);
						if ($check_email == FALSE) array_push($update_errors, "Please type in valid email address.");

						// Form validation: ensure that the form is correctly filled
						if (empty($firstname)) array_push($update_errors, "First name is required.");
						if (empty($lastname)) array_push($update_errors, "Last name is required.");
						if (empty($email)) array_push($update_errors, "Email is required.");

						if (count($update_errors) == 0) {
							// Update new account information into the database
							$sql_02 = "UPDATE users SET firstname = '". $firstname. "', lastname = '". $lastname. "', email = '". $email. "' ";
							$sql_02 .= "WHERE id = ". $userID;
							mysqli_query($connection, $sql_02);
						}

					 }
				?>

					<!-- Display error message -->
					<?php 
						if (!empty($update_errors)) {
							foreach ($update_errors as $error) {
								echo "<p class='error'>". $error. "</p>";
							} 
						} 
						else {
							echo "<p class='error'>Awesome! You have successfully updated your account information.<p>";
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
  mysqli_close($connection);
?>