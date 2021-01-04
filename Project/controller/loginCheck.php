<?php
include('../model/db.php');

session_start(); 

$error="";

if (isset($_POST['submit'])) {
	if (empty($_POST['userID']) || empty($_POST['password'])) {
$error = "<b>Empty field Please give user Id & password</b>";

	}
	else 
	{
		
		$userId = $_POST['userID'];
		$password= $_POST['password'];
		
		
		
			   
		$connection = new db();
		$conobj=$connection->OpenCon();

			
		$userOfficeQuery =  db::CheckUser($conobj,"login",$userId,$password);
		
		$query = "SELECT * FROM `login` WHERE `username` = '$userId'";
		$result = $conobj->query($query);
        $row = mysqli_fetch_array($result);
		$cookie_value = $row['name'];

		if ($userOfficeQuery->num_rows > 0) {
		$_SESSION["userID"] = $userId;
		$_SESSION["password"] = $password;
		
		setcookie("userName" , $cookie_value, time() + (86400 * 30), "/"); 
			   }
			else {
			      $error = "<b>User ID or Password or Position is invalid</b>";

				  }
			   
			
			 
			
		$connection->CloseCon($conobj);
	
      }

}

?>