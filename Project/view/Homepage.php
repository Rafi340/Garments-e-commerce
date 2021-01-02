<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>garments ecommerce</title>
	<style>
		body{
			background-color: lightblue;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div style="display:inline-block;">
    <?php include 'header.html' ?>
  </div>
	<header>
		<div class="logo">
			<img src="./Textile.jpg" alt="Logo" style="width:300px;height:150px" >
		</div>
		
		<h2> Garments E-commerce </h2>
			<nav>
			<ul>
				<li class="active">
					<a href="#">Home</a>
				</li>
				<li class="tive">
					<a href="#">About</a>
				</li>
				<li class="B_login">
					<a href="../controller/b_Login.php">Buyer Login</a>
				</li>
				<li class="Admin Login">
					<a href="../controller/a_login.php">Admin Login</a>
				</li>
				
			</ul>
			</nav>
		
	</header>
  <div>
    <?php include 'footer.html' ?>
  </div>
	
</body>
</html>