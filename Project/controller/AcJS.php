<?php 

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_REQUEST["Email"])) {
			echo "Name is empty";
			echo "<br>";		
		}
		else {
			echo "Name is: " . $_REQUEST["Name"];
			echo "<br>";
		}
		
		
		if(empty($_REQUEST["username"])) {
			echo "username is empty";
			echo "<br>";		
		}
		else {
			echo "username is: " . $_REQUEST["username"];
			echo "<br>";

		}
		
		
		if(empty($_REQUEST["Email"])) {
			echo "Email is empty";
			echo "<br>";		
		}
		else {
			echo "Post is: " . $_REQUEST["Email"];
			echo "<br>";
		}
		
		
		
		if(empty($_REQUEST["password"])) {
			echo "password is empty";
			echo "<br>";		
		}
		else {
			echo "password is: " . $_REQUEST["password"];
			echo "<br>";
		}
	} 
?>