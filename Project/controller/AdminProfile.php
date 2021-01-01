<?php 
    session_start();
 ?>

<html>
	
	<head>
		<title>Admin Profile page </title>
	</head>
	
	<body>
	 <h1>Profile page</h1>
	 
	<div style="display:inline-block;">
    <?php include '../view/header.html' ?>
    </div>
	
	 
	 <?php 
	 echo  $_SESSION['username'];
	 ?>
	 
	 <br>
	 <br>
	 <li class="Employee">
		<a href="AdminEmployee.php">Employee</a>
	</li>
	
	<li class="Sponsors">
		<a href="AdminSponsors.php">Sponsors</a>
	</li>
	
	<li class="Seller-Buyer info">
		<a href="AdminSB.php">Seller-Buyer info</a>
	</li>
	
	<li class="Job Vacancy">
		<a href="AdminJV.php">Job Vacancy</a>
	</li>
	
	<a href="../view/Homepage.php"> Logout </a>
	
	
	<div>
    <?php include '../view/footer.html' ?>
  </div>
  
	
	
	</body>

</html>