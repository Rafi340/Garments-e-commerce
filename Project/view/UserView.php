<?php 
include('header.php');

if(empty($_SESSION["userID"])) 
{
header("Location:Userlogin.php");
}

	

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>User View</title>
    <link rel="stylesheet" type="text/css" href="../css/log.css">


</head>

<body>
<form action="">
	
    <div >
		<img src="../image/p.png" width="200px" height="300px"></br>
		<button id="buttonprofile"><a href="myProfile.php">Profile</a></button><br>
		<button id="buttonprofile"><a href="topProduct.php">Top Products</a></button><br>
        <button id="buttonprofile"><a href="productRange.php">Product Range</a></button><br>
		<button id="buttonprofile"><a href="OurBuyer.php">Our Buyer</a></button><br>
		<button id="buttonprofile"><a href="BuyerRank.php">Buyer Rank</a></button><br>
		<button id="buttonprofile"><a href="ViewOrder.php">View Order</a></button><br>
		<button id="buttonprofile"><a href="S_Achievement.php">Achievement</a></button><br>
		<button id="buttonprofile"><a href="partnership.php">Partnership</a></button><br>
		<button id="buttonprofile2"><a href="../control/logout.php">Logout</a></button>
    </div>
	

</form>
</body>
</html>
