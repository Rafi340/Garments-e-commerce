
<?php
include('../model/config.php');
if(isset($_POST['AccSignin'])) {

	try {
	
		if(empty($_POST['Name'])) {
			throw new Exception('Name can not be empty');
		}
		
		if(empty($_POST['username'])) {
			throw new Exception('UserName can not be empty');
		}
		
		
		if(empty($_POST['Email'])) {
			throw new Exception('Email can not be empty');
		}
		if(empty($_POST['password'])) {
			throw new Exception('password can not be empty');
		}
		
		
		//$result = mysql_query("insert into tbl_student (st_name,st_roll,st_age,st_email) values('$_POST[st_name]','$_POST[st_roll]','$_POST[st_age]','$_POST[st_email]') ");
		
		$statement = $db->prepare("insert into acc_login (Name,username,Email,password) values(?,?,?,?)");
		$statement->execute(array($_POST['Name'],$_POST['username'],$_POST['Email'],$_POST['password']));
		
		$success_message = 'Data has been inserted successfully.';
		
	
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}

?>
<!doctype html>
<html lang="en">
<head>
	<div style="display:inline-block;">
    <?php include '../view/header3.php' ?>
  	</div>
	<meta charset="UTF-8">
	<title>Accountant Registration</title>
</head>
<body>

<h2>Sign In for Accountant</h2>

<?php  
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
?>

<br>

<form action="" method="post">
<table>
	<tr>
		<td>Name: </td>
		<td><input type="text" name="Name"></td>
	</tr>
	<tr>
		<td>username: </td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Email: </td>
		<td><input type="text" name="Email"></td>
	</tr>
	<tr>
		<td>password: </td>
		<td><input type="text" name="password"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="insert" name="AccSignin"></td>
	</tr>
</table>
</form>


<br>
<a href="b_Login.php">back to previous</a>
	
	<div>
    <?php include '../view/footer2.php' ?>
  </div>
</body>
</html>