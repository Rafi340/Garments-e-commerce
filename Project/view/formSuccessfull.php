<?php
//include ('../validation/registeValidation.php');
session_start(); 
if (empty($_SESSION['mname']) || empty($_SESSION['memail'])|| empty( $_SESSION['mpassword']) || empty($_SESSION['mcpassword']) || empty($_SESSION['gender']) || empty($_SESSION['mphone']) || empty($_SESSION['bloodgroup']) || empty($_SESSION['date'])) 
{
header("Location: registr.php");
}


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/successdesign.css" />
</head>
<body>


<center>
	<table class="successfullform">
	 <tr>
	   <td>
		 <fieldset>
		 <h2>You are Successfully Registered <?php echo $_SESSION["mname"];?></h2>
		 <h3>for login <a href="../control/logout.php">click here</a></h3>
		</fieldset>
	   </td>
	 </tr>
 </center>
</body>
</html>

<?php


?>   
