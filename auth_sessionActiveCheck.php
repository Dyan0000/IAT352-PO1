<?php

// check if there is an active session
// if there is no active session --> user is not logged in
// redirect user to login page
session_start();

if(isset($_SESSION["email"])){
  // if session variable 'username'is set - redirect to members page
  header("location: index.php");
  exit(); 
}

?>
