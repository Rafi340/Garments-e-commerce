<!DOCTYPE html>
<html>
<head>
	<title>Log in Form</title>
</head>
<body>
 
    <?php include 'header.php' ?>
  

	
	    
	<?php 
	$cookie_name = "ayesha"; 
	$cookie_value = "1"; 
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
	$myfile = fopen("output/cookies.txt", "w") or die("Unable to open file!"); 
	fwrite($myfile, $cookie_name . " " . $cookie_value . " "); 
	fclose($myfile); 
	?>	

		
		
		 <?php
		
		 
        $emailError = "";
		
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["email"])) {
				  $emailError = "Email is required";
				  
			}
			else{
			}
		   
		}

        
        echo "<br>";
        $passwordError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["password"])) {
				  $passwordError = "Password is required";
			}
			else {
			
			}
		}
		 		
        
	?>
	
	<form action="SellerHome.php" method="post">
     Email <br>
    <input type="text" name="email" required >
	
	<br><br>
    <span><?php echo $emailError; ?></span><br />
    
    Password  <br>
    <input type="text" name="password" required style=" width:333px">
	<br>       
	
	<br><br>
	<input type="submit"  value="Log In" >
	</form>
	
	
	
	
	<div>
    <?php include 'footer.php' ?>
  </div>
	
	
</body>
</html>