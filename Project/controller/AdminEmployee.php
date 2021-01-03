
<?php include '../view/header.html' ?>

<?php 
    session_start();
	 require('JSValidation.php');
 ?>
 


<html>
	
	<head>
		<title>Admin Employee page </title>
	</head>
	
	<style>
	
		body{
			background-color: yellow;
		}
	</style>
	
	
	
	
	<?php
include('../model/config.php');
if(isset($_POST['Insert'])) {

	try {
	
		/*if(empty($_POST['employeename'])) {
			throw new Exception('EName can not be empty');
		}
		
		if(empty($_POST['employeesalary'])) {
			throw new Exception('Esalary can not be empty');
		}
		
		
		if(empty($_POST['employeepost'])) {
			throw new Exception('Epost can not be empty');
		}
		if(empty($_POST['employeemail'])) {
			throw new Exception(' Email can not be empty');
		}*/
		
		
		//$result = mysql_query("insert into tbl_student (st_name,st_roll,st_age,st_email) values('$_POST[st_name]','$_POST[st_roll]','$_POST[st_age]','$_POST[st_email]') ");
		
		$statement = $db->prepare("insert into employee (employeename,employeesalary,employeepost,employeemail) values(?,?,?,?)");
		$statement->execute(array($_POST['employeename'],$_POST['employeesalary'],$_POST['employeepost'],$_POST['employeemail']));
		
		$success_message = 'Data has been inserted successfully.';
		
	
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}

/*else if($_POST['Delete']){
	
	try {
	
		$id='employeeid';
		$statement = $db->prepare("DELETE * from employee WHERE employeeid = ? ");
		//$statement->execute(array($_POST['employeename'],$_POST['employeesalary'],$_POST['employeepost'],$_POST['employeemail']));
		$statement -> bind_param("i", $id);
		$statement -> execute();
		
		$success_message1 = 'Data has been deleted successfully.';
		
	
	}
	
	catch(Exception $e) {
		$error_message1 = $e->getMessage();
	}
	
	
}*/


?>



	
	
	
	<script>
			function validate() {
				var x = document.getElementById('employeename').value;
				// console.log(x);
				if(x == "") {
					document.getElementById('errorMsg').innerHTML = "Name is empty";
					document.getElementById('errorMsg').style.color = "red";
						
				}
				
				
				
				var y = document.getElementById('employeesalary').value;
				// console.log(x);
				if(y == "") {
					document.getElementById('SerrorMsg').innerHTML = "Salary is empty";
					document.getElementById('SerrorMsg').style.color = "red";
						
				}
				
				
				
				var z = document.getElementById('employeepost').value;
				// console.log(x);
				if(z == "") {
					document.getElementById('PerrorMsg').innerHTML = "Post is empty";
					document.getElementById('PerrorMsg').style.color = "red";
						
				}
				
				
				
				var a = document.getElementById('employeemail').value;
				// console.log(x);
				if(a == "") {
					document.getElementById('MerrorMsg').innerHTML = "Mail is empty";
					document.getElementById('MerrorMsg').style.color = "red";
						
				}
				
				if(x=="" || y=="" ||z=="" ||a=="" ){
					return false;
				}
				else{ return true; }
				
				
				
			}
		</script>
	</head>
	
	
	
	
	<body>
	<!-- <h1>Employee page</h1>-->
	 
	<div style="display:inline-block;">
    
    </div>
	 
	 <?php 
	 echo  $_SESSION['username'];
	 ?>
	 <br>
	 <?php  
        if(isset($error_message)) {echo $error_message;}
        if(isset($success_message)) {echo $success_message;}
        ?>
		
		
	 <br>
	 <form name="jsForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="return validate()">
	        <?php  echo "Employee form";?>
			<br>
			
			Name: <input type="text" id="employeename" name="employeename">
			<p id="errorMsg"> </p>
			<br>
			
			Salary: <input type="text" id="employeesalary" name="employeesalary">
			<p id="SerrorMsg"> </p>
			<br>
			
			Post: <input type="text" id="employeepost" name="employeepost">
			<p id="PerrorMsg"> </p>
			<br>
			
			
			Mail: <input type="text" id="employeemail" name="employeemail">
			<p id="MerrorMsg"> </p>
			 <!-- <br>-->
			<!--<p id="errorMsg"> </p>-->
				
			<!--Id: <input type="text" id="employeeid" name="employeeid">-->
			<!--<br>-->
				
			
			<input type="submit" value="Insert" name="Insert">
		</form>
	
	<a href="AdminProfile.php"> Back </a>
	
	<!--<a href="view/Homepage.php"> Logout </a>-->
	
    <div>
    <?php include '../view/footer.html' ?>
     </div>
	
  
	
	
	</body>

</html>