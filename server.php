<?php 
	session_start();

	// variable declaration
	$firstname = "";
	$lastname = "";
	$email = "";
	$errors = array(); 

	// $db = mysqli_connect("localhost", "root", "", "dan_peng");
	require_once('connect.php');

	// REGISTER USER - create an account
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$firstname = mysqli_real_escape_string($db, $_POST['first_name']);
		$lastname = mysqli_real_escape_string($db, $_POST['last_name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// check if the variable $email is a valid email address
		$check_email = filter_var($email, FILTER_VALIDATE_EMAIL);
		if ($check_email == FALSE) array_push($errors, "Please type in valid email address.");

		// form validation: ensure that the form is correctly filled
		if (empty($firstname)) array_push($errors, "First name is required.");
		if (empty($lastname)) array_push($errors, "Last name is required.");
		if (empty($email)) array_push($errors, "Email is required.");
		if (empty($password_1)) array_push($errors, "Password is required.");

		if ($password_1 != $password_2) {
			array_push($errors, "Failed to confirm your password. Please try again.");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1); //encrypt the password before saving in the database
			$query = "INSERT INTO users (firstname, lastname, email, password) 
					  VALUES('$firstname', '$lastname','$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['firstname'] = $firstname;
			$_SESSION['lastname'] = $lastname;
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			$_SESSION['id'] = mysqli_insert_id($db);
			// echo $_SESSION['id'];
			
			header('location: index.php');
		}

	}

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		// check if all inputs are not empty
		if (empty($email)) array_push($errors, "Email is required.");
		if (empty($password)) array_push($errors, "Password is required.");

		// check if the variable $email is a valid email address
		$check_email = filter_var($email, FILTER_VALIDATE_EMAIL);
		if ($check_email == FALSE) array_push($errors, "Please type in valid email address.");

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
			$results = mysqli_query($db, $query);
			
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				$_SESSION['password'] = $password;

				$results_array = mysqli_fetch_assoc($results);
				$_SESSION['firstname'] = $results_array['firstname'];
				$_SESSION['lastname'] = $results_array['lastname'];
				$_SESSION['id'] = $results_array['id'];

				header('location: index.php');
			} else {
				array_push($errors, "Sorry, your email or password is wrong.");
			}
		}
	}

?>