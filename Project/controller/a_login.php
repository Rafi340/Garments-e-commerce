<?php 
    session_start();
 ?>
 
 
<?php

   
  

if(isset($_POST['form_login'])) 
{
	$username = $_POST["username"];
	
	try {
	
		
		if(empty($_POST['username'])) {
			throw new Exception('Username can not be empty');
		}
		
		if(empty($_POST['password'])) {
			throw new Exception('Password can not be empty');
		}
	  
	  
		$password = $_POST['password'];
		$password = ($password);
	
	
		include('../model/config.php');
		$num=0;
		
		$statement = $db->prepare("select * from a_login where username=? and password=?");
		$statement->execute(array($_POST['username'],$password));		
		
		$num = $statement->rowCount();
		
		if($num>0) 
		{
			session_start();
			$_SESSION['name'] = "garments";
			header("location: AdminProfile.php"); 
			
		}
		else
		{
			throw new Exception('Invalid Username and/or password');
		}
	
	
	
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}

?>

<br>
<!DOCTYPE html>

<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$cookieValue= $_POST["username"];
	setcookie('Admin',$cookieValue,time()+86400);
		
}
 ?>
 
 
<html>
<head>
	<title>Log in Form</title>
</head>
<body>
 <div style="display:inline-block;">
    <?php include '../view/header.html' ?>
  </div>
  <?php
if(isset($error_message))
{
	echo $error_message;
}
?>
<br>
	<form action="" method="post">
     <table>
	<tr>
		<td>Username: </td>
		<td><input type="text" name="username" required></td>
	</tr>
	<tr>
		<td>Password: </td>
		<td><input type="password" name="password" required></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Login" name="form_login"></td>
	</tr>
	</table>
	
	
	
	
	<form action="FP.php" method="post">
	<input type="submit" name="Fp" value="forgot password??" style="color:green; font-weigt:bold">
	</form>
	
	<?php 
	 $_SESSION['username']=$username;      //Session is created
	 //echo  $_SESSION['username'];
	 ?>
	 
	 <a href="C:\xampp\htdocs\Garments-e-commerce\Project\view\Homepage.php"> Back </a>
	
	<div>
    <?php include '../view/footer.html' ?>
  </div>
	
	
</body>
</html>