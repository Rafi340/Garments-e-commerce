<!DOCTYPE html>
<head>
<title> Sign in </title>
</head>
<link rel="stylesheet" href="signStyle.css">
<Body>
<div class="header3"><?php
include 'header3.php'

?>

</div>

<form method="POST" action="AccLogin.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>


<div class="registration">

<h1>Registration form</h1>

  <p>
  ID: <input type="text" name="id" required><br><br>  
  User Name: <input type="text" name="name" required><br><br>
    

    Password:<input type="var" name="password" required><br><br>
    Contact no.:<input type="text" name="CN"><br><br>
    
    Email: <input type="text" name="email"><br><br>
    
    </p>

<input class="btn" input type="submit" name="submit" value="Sign In" ><br><br>

</div>
</form>

  

<?php
$nameError = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
if(empty($_REQUEST["name"])) {
$nameError = "Name is required";
}
else {
echo "Name is: " . $_REQUEST["name"];
}
}
?>






 <div class="footer2"><?php include 'footer2.php' ?></div>   

    

</Body>
</html>