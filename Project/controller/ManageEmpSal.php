<!DOCTYPE html>
<head>
<title> Manage Emp Salary </title>
</head>
<Body>
     <h2>Job - Employees - Salary
     <h2> GM - 100 - 80k <h2>
    <h2> Manager - 1000 - 50k <h2>
    <h2> ITdept engr. - 10 - 1L <h2>
    <h2> Computer Man - 20 - 20k <h2>
    <h2> Tailor - 8870 - 15k <h2>

    <?php

$conn=new mysqli("localhost","root","","accountant");
$sql="SELECT username,salary FROM employee";
$result=mysqli_query($conn,$sql);
$nd=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);



?>

<table class="table table-striped">
<tr>
   <th>Name</th>
   <th>Salary</th>
   
</tr>

<?php foreach($nd as $key): ?> 

    <tr>
        <td><?php echo $key["username"] ?></td>
        <td><?php echo $key["salary"] ?></td>
    </tr>
    
    
    <?php endforeach; ?>


    <form method="POST" action="Employees.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
    <input type="submit" value="Back">
    </form>
</Body>
</html>