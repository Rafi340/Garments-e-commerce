<?php
 session_start();
?>

<html>
<head>
	 <div style="display:inline-block;">
    <?php include '../view/header.html' ?>
  	</div>
	<title>Buyer HomePage</title>
</head>
<body>
	<h2>Home Page</h2>

	<?php
	if(isset($_COOKIE['Buyer'])){
			
			echo "Cookie set";
			
		}
		else
		{
			echo "Cookie not set";
		}
	?>
	<?php
	echo "Welcome to ";
	echo $_SESSION['username'];
	?>
	<br>
	
	<form method="post">
		<label>Search</label>
		<input type="text" name="Search">
		<input type="submit" name="Search">
	</form>

	
			<ul>
				<li class="ByrPrf">
					<a href="BuyerProfile.php">Profile</a>
				</li>
	
				<li class="Addcart">
					<a href="Cart.php">Add to cart</a>
				</li>
				<li class="Checkout">
					<a href="checkout.php">Check Out</a>
				</li>
				<li class="Track Order and Shipping Details">
					<a href="tks.php">Track Order and Shipping Details</a>
				</li>
				<li class="ProductReview">
					<a href="ProductReview.php">ProductReview</a>
				</li>
			</ul>
	
<br>
			<form action="b_Login.php" method="post">
			<input type="submit" name="BuyerLogin" value="Log Out" style="color:green; font-weigt:bold">
			</form>
	<div>
    <?php include '../view/footer.html' ?>
  </div>

</body>
</html>