<?php
	
	include('../control/registerCheck.php');
	include('../control/registeValidation.php');

	if(isset($_SESSION['mname'])|| isset($_SESSION['memail']) || isset( $_SESSION['mpassword']) || isset($_SESSION['mcpassword']) || isset($_SESSION['gender']) || isset($_SESSION['mphone']) || isset($_SESSION['bloodgroup']) || isset($_SESSION['date']))
	{
	header("location: formSuccessfull.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/registration.css" />
	<script src="../js/usevalidated.js"></script>
</head>
<body>
<center>
	<div class="register_wrapper">

	<form action="" onsubmit="return validateForm()" method="post"  enctype="multipart/form-data" >
	
			<legend><h5>Fill up the Registration Form:</h5></legend>
			<table align="center">
				<tr>
					<td><h4>Name:</h4></td>
					<td></td>
					<td><input type ="text" name = "mname" id="name"></td>
					<td><?php echo $nameError;?></td>
				</tr>
				<tr><td><hr></td></tr>
				<tr>
					<td><h4>User Id:</h4></td>
					<td></td>
					<td ><input type ="text" name = "userId" id="id"></td>
					<td><?php echo $userIdError;?></td>
					
				</tr>
				<tr><td><hr></td></tr>
				<tr>
					<td><h4>Email:<h4></td>
					<td></td>
					<td><input type ="email" name ="memail" id="email"></td>
					<td><?php echo $emailErr;?></td>
				</tr>
				<tr><td><hr></td></tr>
				<tr>
					<td><h4>Password:</h4></td>
					<td></td>
					<td><input type ="password" name ="mpassword" id="password"></td>
					<td><?php echo $passErr;
					    echo $validPass;?>
					</td>
					<td><?php echo $passError; ?></td>
				</tr>
				<tr><td><hr></td></tr>
				<tr>
					<td><h4>Confirm Password:</h4></td>
					<td></td>
					<td><input type ="password" name ="mcpassword" id="cpassword">
					<td><?php echo $cPassError;?></td>
				</tr>
				<tr><td><hr></td></tr>
				<tr>
					<td><h4>Gender:<h4></td>
					<td></td>
					<td><input type ="radio" name ="gender" value ="male" id="male">Male
					<input type ="radio" name ="gender" value ="female" id="female">Female
					<input type ="radio" name ="gender" value ="female" id="others">Others
					</td>
					<td><?php echo $genderError;?></td>
				</tr>
				<tr><td><hr></td></tr>
				<tr>
					<td><h4>Blood Group:</h4></td>
					<td></td>
					<td>
						<div class="select"></div>
						<select name="bloodgroup">
						  <option value="">-- select one --</option>
						  <option value=" A positive" id="apositive"><h4>A+<h4></option>
						  <option value="A Negetive" id="anegetive"><h4>A-<h4></option>
						  <option value="B positive" id="bpositive"><h4>B+</h4></option>
						  <option value="B negetive" id="bnegetive"><h4>B-</h4></option>
						  <option value="O positive" id="opositive"><h4>O+</h4></option>
						  <option value="O Negetive" id="onegetive"><h4>O-<h4></option>
						</select>
					</select>
					</td>
					<td><?php echo $bloodgroupError;?></td>
				</tr>
				<tr><td><hr></td></tr>
				<tr>
					<td><h4>Phone Number:</h4></td>
					<td></td>
					<td><input type="tel" name="mphone" id="phone"></td>
					<td><?php echo $noError;?></td>
					<td><?php echo $numberrError;?></td>
				</tr>
				<tr><td><hr></td></tr>
				<tr>
					<td><h4>Date Of Birth:</h4></td>
					<td></td>
					<td><input type ="date" name ="date" id="dob"></td>
					<td><?php echo $dobError;?></td>
				</tr>
				<tr><td><hr></td></tr>
			</table>
			<input name="submit" type="submit" value="Register">
	</table>
	</form>
	 </div>
	</center>

</body>
</html>