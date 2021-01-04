<!DOCTYPE html>
<head>
<title> Received Money </title>
</head>
<Body>
    <h1> Ammount <h1>

    <?php

$conn=new mysqli("localhost","root","","accountant");
//$sql = "SELECT MONTHNAME(created) as mname, SUM(amount) as total FROM trans GROUP BY MONTH(created)";

$sql1="SELECT sum(amount) as total FROM trans";
$result1=mysqli_query($conn,$sql1);
$nd1=mysqli_fetch_all($result1,MYSQLI_ASSOC);
mysqli_free_result($result1);
mysqli_close($conn);
//$result=$conn->query($sql);

?>

   
</tr>



    <?php foreach($nd1 as $key1): ?> 
    <?php echo $key1["total"] ?>
     


    <?php endforeach; ?>



    <?php
$myfile = fopen("Rashik_Bank.txt", "w") or die("Unable to open file!");
$txt1 = "5000000000";
//fwrite($myfile, $txt);
$txt = "1000000000"+$txt1;
fwrite($myfile, $txt);
fclose($myfile);
?>

    <form method="POST" action="AcHomepage.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="submit" value="Back">
    </form>
</Body>
</html>