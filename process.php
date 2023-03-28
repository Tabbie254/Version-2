<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	// Connect to the database
	$servername = 'localhost';
	$username = 'root';
	$password = 'password';
	$dbname = 'my_database';
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
		die('Connection failed: ' . mysqli_connect_error());
	}

	// Insert the form data into the database
	$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
	if (mysqli_query($conn, $sql)) {
		echo 'Form submitted successfully';
	} else {
		echo 'Error submitting form: ' . mysqli_error($conn);
	}

	mysqli_close($conn);
} else {
	echo 'Invalid request method';
}
