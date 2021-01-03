<?php
ob_start();
session_start();
?>
<?php
include('../model/config.php');
if(isset($_POST['form1'])) {
	$username = $_POST["username"];
	try {

	
		if(empty($_POST['old_password'])) {
			throw new Exception("Old password field can not be empty");
		}
		
		if(empty($_POST['new_password'])) {
			throw new Exception("New password field can not be empty");
		}
		
		if(empty($_POST['confirm_password'])) {
			throw new Exception("Confirm password field can not be empty");
		}
		
		// Checking old password
		$password = $_POST['old_password'];
		$password = ($password);
		
		/*$num=0;
		$result = mysql_query("select * from tbl_login where password='$password'");
		$num = mysql_num_rows($result);*/
		$num=0;
		
		$statement = $db->prepare("select * from b_login where password='$password'");
		$statement->execute(array($_POST['username'],$password));		
		
		$num = $statement->rowCount();
		if($num==0) {
			throw new Exception("Old password is wrong!");
		}
		
		
		if($_POST['new_password'] != $_POST['confirm_password']) {
			throw new Exception("New passwords does not match!");
		}
		
		$new_password = $_POST['new_password'];
		$new_password =($new_password);
		
		//$result = mysql_query("update tbl_login set password='$new_password' where id=1");
		$statement = $db->prepare("update b_login where password='$new_password' where username='$username'");
		
		$success_message = 'Password is changed successfully.';
		
	
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Change Password Page</title>
</head>
<body>

<h2>Change Password</h2>

<?php  
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
?>

<br>

<form action="" method="post">
<table>
	<tr>
		<td>Old Password: </td>
		<td><input type="text" name="old_password"></td>
	</tr>
	<tr>
		<td>New Password: </td>
		<td><input type="text" name="new_password"></td>
	</tr>
	<tr>
		<td>Confirm New Password: </td>
		<td><input type="text" name="confirm_password"></td>
	</tr>
	
	<tr>
		<td></td>
		<td><input type="submit" value="Update" name="form1"></td>
	</tr>
</table>
</form>


<br>
<a href="BuyerProfile.php">back to previous</a>
<form action="b_Login.php" method="post">
			<input type="submit" name="BuyerLogin" value="Log Out" style="color:green; font-weigt:bold">
			</form>

	
</body>
</html>