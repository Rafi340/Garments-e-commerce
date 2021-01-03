<?php
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome To our Textile Shop</title>
</head>
<body>
	<?php
	echo "Name: ";
	echo $_SESSION['username'];
	?>

	<ul>
				<li class="cg">
					<a href="b_cp.php">Change Password</a>
				</li>
	</ul>
	<a href="BuyerHome.php">
    <button>Back</button>
    </a>
    <a href="b_login.php">
    <button>Log Out</button>
    </a>


</body>
</html>