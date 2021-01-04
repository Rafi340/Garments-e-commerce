<?php
include('../model/db.php');
session_start(); 
		  
 $error="";
 $matchPass="";
if (isset($_POST['submit'])) {
		  
  if (empty($_POST['mname']) || empty($_POST['memail'])|| empty( $_POST['mpassword']) || empty($_POST['mcpassword']) || empty($_POST['gender']) || empty($_POST['mphone']) || empty($_POST['bloodgroup']) || empty($_POST['date']) || empty($_POST['userId'])){
$error = "Fill up All the Field For Successfull Registration";
 
}

  
  else
{
		 $name = $_POST["mname"];
		 $userId = $_POST["userId"];
		 $email = $_POST["memail"];
		 $pass = $_POST["mpassword"];
		 $cPass = $_POST["mcpassword"];
		 $phone = $_POST["mphone"];
		 $myGender = $_POST["gender"];
		 $bGroup = $_POST["bloodgroup"];
		 $dob = $_POST["date"];
		 
		 
		 if($pass === $cPass)
		 {		 

		$_SESSION["mname"] = $name;
		$_SESSION["userId"] = $userId;
		$_SESSION["memail"] = $email;
		$_SESSION["mpassword"] = $pass;
		$_SESSION["mcpassword"] = $cPass;
		$_SESSION["gender"] = $myGender;
		$_SESSION["mphone"] = $phone;
		$_SESSION["bloodgroup"] = $bGroup;
		$_SESSION["date"] = $dob;
		
		$connection = new db();
		$conobj=$connection->OpenCon();


		 $qry =  db::UserInfoTable($conobj,$userId,$name,$pass,$email, $myGender, $phone, $bGroup,$dob);
		
		 
		  
		 $res =$conobj->query($qry);
		
		
		
		
	

		if($res)
			
			{
				header('Location:../view/formSuccessfull.php');
			}
		else 
		{
			echo "error occured";
		}
		$connection->CloseCon($conobj);
		 }
	else{
			  $matchPass = "Password Doesn't Match";
		 }
		 
		 
		
 }
     
		}
		?>
	


