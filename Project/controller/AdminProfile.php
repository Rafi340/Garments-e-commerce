<?php 
    session_start();
 ?>
  <?php include '../view/header.html' ?>

<html>
	
	<head>
		<title>Admin Profile page </title>
	</head>
	
	<style>
	
		body{
			background-color: yellow;
		}
	</style>
	
	<body>
	<!-- <h1>Profile page</h1>-->
	 
	<div style="display:inline-block;">
   
    </div>
	
	
	<?php
	if(isset($_COOKIE['Admin'])){
			
			echo "Cookie set";
			
		}
		else
		{
			echo "Cookie not set";
		}
	?>
	
	
	 
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