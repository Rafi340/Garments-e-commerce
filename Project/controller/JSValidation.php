<?php 

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_REQUEST["employeename"])) {
			echo "Name is empty";		
		}
		else {
			echo "Name is: " . $_REQUEST["employeename"];
		}
		
		
		if(empty($_REQUEST["employeesalary"])) {
			echo "Salary is empty";		
		}
		else {
			echo "Salary is: " . $_REQUEST["employeesalary"];
		}
		
		
		if(empty($_REQUEST["employeepost"])) {
			echo "Post is empty";		
		}
		else {
			echo "Post is: " . $_REQUEST["employeepost"];
		}
		
		
		
		if(empty($_REQUEST["employeemail"])) {
			echo "Mail is empty";		
		}
		else {
			echo "Mail is: " . $_REQUEST["employeepost"];
		}
		
		
		//$statement = $db->prepare("insert into Employee (employeename,employeesalary,employeepost,employeemail) values(?,?,?,?)");
		//$statement->execute(array($_POST['employeename'],$_POST['employeesalary'],$_POST['employeepost'],$_POST['employeemail']));
		
		//$success_message = 'Data has been inserted successfully.';
	} 
?>