<!DOCTYPE html>
<?php 
	session_start();
?>
<html>
	<head>
	</head>
	<body>

		<?php 
			
			$_SESSION["username"] = $username;

			echo "Session is set";

			echo "<br />";

			echo  " username: " . $_SESSION["username"];
		?>
	</body>
</html>