<?php
$servername = "127.0.0.1"; // Replace with your MySQL server name
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "test1"; // Replace with your MySQL name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

//Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
//Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//Prepare the INSERT statement
$sql = "INSERT INTO `test` (name, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt ->bind_param("sss", $name, $email, $message);

//Execute the statement
if ($stmt->execute()) {
	echo "Form data saved successfully.";
} else {
	echo "Error: " . $stmt->error;
}	

//Close the connection
$stmt->close();
$conn->close();

?>