<?php
	$conn = new mysqli('localhost', 'root', 'root1234', 'libsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

?>
