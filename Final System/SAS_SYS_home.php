<!DOCTYPE html>
<html>
<head>
	<title>Sips and Sweets</title>
	<link rel="stylesheet" type="text/css" href="SAS_SYS_home.css">
</head>
<body>
	<div class="topnav">
		<?php
            // Retrieve and display form data
            if (isset($_POST['username']) && isset($_POST['pwd']) && isset($_POST['agreement'])) {
                include 'SAS_SYS_data.php';

                $username = $_POST['username'];
                $pwd = $_POST['password'];
                $agreement = $_POST['agreement'];
			}
        ?>
		<img src="Logo.png" style="width:120px;height:110px;" class="topnav-img">
		<div class="topnav2">
			<br><br>
			<a href="SAS_SYS_FAQs.php"><input class="topnav-button" type="submit" value="FAQs"></a>
			<a href="SAS_SYS_aboutus.php"><input class="topnav-button" type="submit" value="About Us"></a>
			<a href="SAS_SYS_home.php"><input class="topnav-button" type="submit" value="Home"></a>
		</div>
	</div>	
	<h3 style="font-size: 25px">"A sip so sweet, can make life complete."</h3>
	<div class="food-image">
		<div class="food-text">
			<h1 style="font-size:30px">System Management Department</h1>
			<br>
			<p>A company's system management department is in charge of keeping an eye on the technical systems in place to make sure they are serving the needs of the business and operating at peak efficiency. They oversee network connectivity, solve technological problems, implement security measures and disaster recovery plans, and maintain and upgrade hardware and software systems. In order to ensure that technology is supporting the company's aims and objectives, this department closely collaborates with other departments. It also plays a crucial role in maintaining smooth and productive business operations.</p>
			<br>
			<br>
			<button type="button" value="Learn More" onclick="alert('Not Yet Available')">Learn More</button>
		</div>
	</div>
	<br><br>
	<div class="module-image">
		<div class="module-text">
			<button type="button" value="Accounting">Accounting Department</button>
			<div class="module-content">
				This is Accounting
			</div>
		</div>
	</div>
	<br><br><br>
	<div class="module-image1">
		<div class="module-text">
			<button type="button" value="HR">HR Department</button>
			<div class="module-content">
				This is HR
			</div>
		</div>
	</div>
	<br><br><br>
	<div class="module-image2">
		<div class="module-text">
			<button type="button" value="Supply Chain">Supply Chain Management</button>
			<div class="module-content">
				This is Supply Chain
			</div>
		</div>
	</div>
	<br><br><br>
	<div class="module-image3">
		<div class="module-text">
			<button type="button" value="IT">Information System Department</button>
			<div class="module-content">
				This is IT
			</div>
		</div>
	</div>
	<a href="SAS_SYS_loginform.html"><p style="text-align:right"><input class="button" type="submit" value="Go Back"></a>
	<br>
</body>
</html>