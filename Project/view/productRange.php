<?php

include('../control/searchProductCheck.php');

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body bgcolor="#cccc00">
    Select Catagory:<select name="" id="">
		<option value="">Ladies Product</option>
		<option value="">Gents Product</option>
		<option value="">Children Product</option>
	</select>
	<br>
	<br>
	<br>
	<br>
	<br>
	<form action="" method ="post">
	Search Product:<input type="text" name="search"/>
	<input type="submit" name="submit" style="background-color:green" value="Details" method="post" />
	<?php echo "<br>"; 
	echo $value."<br>";
	      echo $size."<br>";
	      echo $brand."<br>";
	      echo $av;
		  ?>
		  </form>
		  <br>
		  <br>
		  <br>
		  <a href="UserView.php"><button style="background-color:red">Back</button><a>
</body>
</html>