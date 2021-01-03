<?php include '../view/header.html' ?>
<?php 
    session_start();
	 require('JS.php');
 ?>

 <html>
	
	<head>
		<title>Buyer Registration </title>
	</head>
<?php
include('../model/config.php');
if(isset($_POST['fo'])) {

	try {
		
		$statement = $db->prepare("insert into b_login (Name,username,Email,password) values(?,?,?,?)");
		$statement->execute(array($_POST['Name'],$_POST['username'],$_POST['Email'],$_POST['password']));
		
		$success_message = 'Registration Complete! You Can Login';
		
	
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

<head>
</head>
<body>
	 
	 <?php 
	 echo  $_SESSION['username'];
	 ?>
<h2>Sign In for Buyer</h2>

<?php  
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
?>

<br>

<form name="jsForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="return validate()">
	        <?php  echo "Buyer Registration Form";?>
			<br>
			
			Name: <input type="text" id="Name" name="Name">
			<p id="errorMsg"> </p>
			<br>
			
			UserName: <input type="text" id="username" name="username">
			<p id="SerrorMsg"> </p>
			<br>
			
			Email: <input type="text" id="Email" name="Email">
			<p id="PerrorMsg"> </p>
			<br>
			
			
			Password: <input type="text" id="password" name="password">
			<p id="MerrorMsg"> </p>
            <br>
			<br><!--<p id="errorMsg"> </p>-->
				
			
			<input type="submit" value="Registration" name="Insert">
		</form>

<br>
<a href="b_Login.php">back to previous</a>
	
	<div>
    <?php include '../view/footer.html' ?>
  </div>
</body>
</html>