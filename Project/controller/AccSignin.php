
<?php
session_start();
require('acjs.php');

?>


<?php

include('../model/server.php');
if(isset($_POST['AccSignin'])) {

	try {
	
		/*if(empty($_POST['Name'])) {
			throw new Exception('insert name');
		}
		
		if(empty($_POST['username'])) {
			throw new Exception('insert UserName');
		}
		
		
		if(empty($_POST['Email'])) {
			throw new Exception('insert mail');
		}
		if(empty($_POST['password'])) {
			throw new Exception('insert pass.');
		}*/
		
		
		
		
		$statement = $db->prepare("insert into acc_login (Name,username,Email,password) values(?,?,?,?)");
		$statement->execute(array($_POST['Name'],$_POST['username'],$_POST['Email'],$_POST['password']));
		
		$success_message = 'Data inserted successfully.';
		
	
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}

?>

<script>
			function validate() {
				var x = document.getElementById('Name').value;
				// console.log(x);
				if(x == "") {
					document.getElementById('errorMsg').innerHTML = "Name is empty";
					document.getElementById('errorMsg').style.color = "red";
						
				}
				
				
				
				var y = document.getElementById('username').value;
				// console.log(x);
				if(y == "") {
					document.getElementById('SerrorMsg').innerHTML = "username is empty";
					document.getElementById('SerrorMsg').style.color = "red";
						
				}
				
				
				
				var z = document.getElementById('Email').value;
				// console.log(x);
				if(z == "") {
					document.getElementById('PerrorMsg').innerHTML = "Email is empty";
					document.getElementById('PerrorMsg').style.color = "red";
						
				}
				
				
				
				var a = document.getElementById('password').value;
				// console.log(x);
				if(a == "") {
					document.getElementById('MerrorMsg').innerHTML = "password is empty";
					document.getElementById('MerrorMsg').style.color = "red";
						
				}
				
				if(x=="" || y=="" ||z=="" ||a=="" ){
					return false;
				}
				else{ return true; }
				
				
				
			}
</script>




<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="../view/AcSign.css">
	<div style="display:inline-block;">
    <?php include '../view/header3.php' ?>
  	</div>
	<meta charset="UTF-8">
	<title>Accountant Registration</title>
</head>
<body>

<h2>Sign In for Accountant</h2>

<?php  
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
?>

<br>



<!--<form action="" method="post">-->
<form name="js" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="return validate()">

<table>
	<tr>
		<td>Name: </td>
		<td><input type="text" name="Name"></td>
	</tr>
	<tr>
		<td>username: </td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Email: </td>
		<td><input type="text" name="Email"></td>
	</tr>
	<tr>
		<td>password: </td>
		<td><input type="text" name="password"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="insert" name="AccSignin"></td><br>
		
	</tr>
</table><br>
<a href="AcLogin.php"> Go to login </a><br>
</form>


<br>

	
	<div>
    <?php include '../view/footer2.php' ?>
  </div>
</body>
</html>