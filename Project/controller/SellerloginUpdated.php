<!DOCTYPE html>
<html>
<head>
	<title>Log in Form</title>
</head>
<body>
 
  
  
		
		
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
	
	<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    User Name:<input type="text='0'" name="name" Required>

    <br><br>
    Password:<input type="var" name="password" Required>
    
    <br><br>
    <input type="submit" value="Login">
    
 
</form>
	
	
	
	<div>
    <?php include 'footer.php' ?>
  </div>
	
	
</body>
</html>