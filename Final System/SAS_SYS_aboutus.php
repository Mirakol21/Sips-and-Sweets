<?php
$servername = "127.0.0.1"; // Replace with your MySQL server name
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "sas_sys"; // Replace with your MySQL database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Retrieve data from the database
$sql = "SELECT username, password, agreement FROM `admin`";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sips and Sweets</title>
<style>
	.body {
			background-color: #ffc2d1;
	}
	.form-button {
			display: inline-block; padding: 10px 20px;
			background-color: #781113; color: #fff;
			font-size: 16px;
			font-weight: bold;
			text-decoration: none;
			border-radius: 5px;
			transition: background-color 0.3s ease;
	}
    .form-button:hover {
			background-color: #ffc2d1;
	}
</style>
</head>
<body class="body">
	<br>
	<br>
	<center>
	<h2><u>Members of the Company</u></h2>
	<br>
	<h4">Accountancy Department</h4><br><br>
	<input type="text" id="mem1" name="mem1"  size="9" value="Sei Pagdangan" readonly>
	<br>
	<h4>HR/Payroll Department</h4>
	<input type="text" id="mem1" name="mem1"  size="32" value="Jonah Mark Abella / Jemuel Chris Ambong" readonly>
	<br>
	<h4>Marketing Department</h4>
	<input type="text" id="mem1" name="mem1"  size="23" value="Ruel Jean Dungog / Albert Cinto" readonly>
	<br>
	<h4>Supply Chain Management</h4>
	<input type="text" id="mem1" name="mem1"  size="13" value="John Ryan Canillas" readonly>
	<br>
	<h4>System Management</h4>
	<input type="text" id="mem1" name="mem1"  size="35" value="Jeremy Teerrence Valenzuela / Angelo Medina" readonly>
	</center>
	<br>
	<br>
	<br>
	<br>
	<a href="SAS_SYS_home.php"><p style="text-align:right"><input class="form-button" type="submit" class="button" value="Home"></a>
</body>
</html>