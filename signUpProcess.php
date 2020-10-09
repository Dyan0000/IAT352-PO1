<?php
echo "<html><head></head><body>";

$firstName = (!empty($_GET['firstName']) ? $_GET['firstName'] : "");
$lastName = (!empty($_GET['lastName']) ? $_GET['lastName'] : "");
$emailAddress = (!empty($_GET['emailAddress']) ? $_GET['emailAddress'] : "");
$password = (!empty($_GET['password']) ? $_GET['password'] : "");

$file = 'signUpBook.txt';
// Open connection to the $file in writing mode
if($handle = fopen($file, 'a+')) {

	// Write string to the file
	// the function returns the number of bytes interted or false
	fwrite($handle, "$firstName,$lastName,$emailAddress,$password\n");

	fclose($handle);
} else {
	echo "Could not open file for writing.";
}

$content = "";
	if($handle = fopen($file, 'r')) {  // read
		// Read the content until you reach the end of file - feof
		while(!feof($handle)) {
			// read one line in each iteration - fgets
			$content = fgets($handle);
			if (!empty($content) ){
			$address=explode(",", $content);
			echo "<p>" . $address[0] . "<br/>";
			echo "" . $address[1] . " ";
			echo "" . $address[2] . "<br/>";
			echo "" . $address[3] . "</p><p>&nbsp;</p>";
			}


		}
	fclose($handle);
    }

    ?>