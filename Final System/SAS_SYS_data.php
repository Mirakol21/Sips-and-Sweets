<?php
$servername = "127.0.0.1"; // Replace with your MySQL server name
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "sas_sys"; // Replace with your MySQL name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

//Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
//Retrieve form data
$username = $_POST['username'];
$password = $_POST['pwd'];
$agreement = $_POST['agreement']


//Prepare the INSERT statement
$sql = "INSERT INTO `admin` (usernmae, pwd, agreement) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt ->bind_param("sss", $username, $password, $agreement);

// Execute the statement
if ($stmt->execute()) {
	echo "Error: " . $stmt->error;
}
//Close the connection
$stmt->close();
$conn->close();

?>