<?php
session_start();


?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/log.css">
</head>
<body>
	<div id="welcome">
	 
		<?php 
		 if(isset($_COOKIE['userName']))
		 {
			 echo $_COOKIE['userName'];
		 }
		 echo " ";
		echo $_SESSION["userID"];?>
	</div>
</body>
</html>