<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

</head>
<body>
<div class="container">
<div class="row">

<?php

$conn=new mysqli("localhost","root","","accountant");
$sql = "SELECT MONTHNAME(created) as mname, SUM(amount) as total FROM trans GROUP BY MONTH(created)";
$result=$conn->query($sql);

?>

<table class="table table-striped">
<tr>
   <th>Month</th>
   <th>Total</th>
</tr>

<?php while ($row = $result->fetch_object()): ?> 

    <tr>
        <td><?php echo $row->mname; ?></td>
        <td><?php echo $row->total; ?></td>
    </tr>
    
    <?php endwhile; ?>
       

</table>

</div>

</div>
</div>
</body>
</html>