<!DOCTYPE html>
<head>
    <title> Login Form </title>
</head>
<link rel="stylesheet" href="AccStyle.css">
<body>

<Div class="header1"><?php

include 'header1.php';
 
?>
</Div>

<form method="POST" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>

<div class="LoginForm">
<h1>Login</h1>

<div class="textbox">
    <input type="text" placeholder="User Name" name="" value="" Required>
</div>

<div class="textbox">
    <input type="text" placeholder="Password" name="" value="" Required>
</div>

<input class="btn" input type="submit" name="" value="log In"><br><br>
<input class="signbtn" input type="button" name="" value="Sign In">

</div>
  
    
    
    


</form>

<form method="POST" action="LandingPage.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="submit" value="Back">

</form>

</body>
</html>