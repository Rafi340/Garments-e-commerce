<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

</head>
<body>

<?php

$conn=new mysqli("localhost","root","","accountant");
//$sql = "SELECT MONTHNAME(created) as mname, SUM(amount) as total FROM trans GROUP BY MONTH(created)";
$sql="SELECT month,amount FROM trans";
$result=mysqli_query($conn,$sql);
$nd=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);

$sql1="SELECT sum(amount) as total FROM trans";
$result1=mysqli_query($conn,$sql1);
$nd1=mysqli_fetch_all($result1,MYSQLI_ASSOC);
mysqli_free_result($result1);
mysqli_close($conn);
//$result=$conn->query($sql);

?>

<table class="table table-striped">
<tr>
   <th>Month</th>
   <th>Total</th>
   
</tr>

<?php foreach($nd as $key): ?> 

    <tr>
        <td><?php echo $key["month"] ?></td>
        <td><?php echo $key["amount"] ?></td>
    </tr>
    
    
    <?php endforeach; ?>

    <?php foreach($nd1 as $key1): ?> 
    <?php echo $key1["total"] ?>
     


    <?php endforeach; ?>
    
    
       

</table>

</div>

</div>
</div>
</body>
</html>