<!DOCTYPE html>
<head>
<title> Home Page </title>
</head>
<body>

<?php
	echo "Welcome to ";
	echo $_SESSION['username'];
	?>

<?php

include 'header2.php'
?>

<a href="TransList.php">Transaction </a> <br>
<a href="VerifyOnlineTrans.php">Verify O/T</a> <br>
<a href="ReceivedMoney.php">Received Money</a> <br>
<a href="Employees.php">Employees</a><br>
<a href="Profile.php">Profile</a>
<br><br>
<form method="POST" action="AcLogin.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="submit" value="Log Out">
    </form>


<br><br>

<?php
include 'Footer1.php'
?>

</body>
</html>