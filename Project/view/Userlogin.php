<?php


include('../control/logincheck.php');

if(isset($_SESSION['userID'])){
header('location:UserView.php');
}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="../css/log.css" />
	
</head>

<body>
	<br><br>
	<div class="login_page">
		<div class="form">
			<form action="" method="post" class="loginform" onsubmit="logvalidateForm()">
				
				<h2>Login</h2>
				<input  type="text" name="userID" placeholder="user name" id="id"/><br>
				<input type="password"  name="password" placeholder="password" id="password" /><br>
		  	<?php echo $error;?>
			<hr>
			<input id="submit" type="submit" name="submit" value="LOGIN" /><br>
			
			<a href="../index.php">go home clcick here</a>
			</form>
		</div>
	</div>
</body>

</html>