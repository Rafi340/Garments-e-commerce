<?php 
    session_start();
 ?>

 

<?php

 

if(isset($_POST['AcLogin'])) 
{
    $username = $_POST["username"];
    try {
        
        if(empty($_POST['username'])) {
            throw new Exception('Username can not be empty');
        }
        
        
        if(empty($_POST['password'])) {
            throw new Exception('Password can not be empty');
        }
    
        
        $password = $_POST['password'];
        $password = ($password);
    
    
        include('../model/server.php');
        $num=0;
        
        $statement = $db->prepare("select * from acc_login where username=? and password=?");
        $statement->execute(array($_POST['username'],$password));        
        
        $num = $statement->rowCount();
        
        if($num>0) 
        {
            session_start();
            $_SESSION['name'] = "garments";
            header("location: AcHomepage.php");
            
        }
        else
        {
            throw new Exception('Invalid Username and/or password');
        }
    
    
    
    }
    
    catch(Exception $e) {
        $error_message = $e->getMessage();
    }
    
}
?>
<br>
<!DOCTYPE html>
<html>
<head>
    <title>Accountant LoginForm</title>
</head>
<body>
 <div style="display:inline-block;">
    <?php include '../view/header1.php' ?>
  </div>

 

<?php
if(isset($error_message))
{
    echo $error_message;
}
?>

 

<br>
    <form action="" method="post">
     <table>
    <tr>
        <td>Username: </td>
        <td><input type="text" name="username" required></td>
    </tr>
    <tr>
        <td>Password: </td>
        <td><input type="password" name="password" required></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Login" name="AcLogin" required></td>
    </tr>
    </table>
    
    
    
    
    
    <form action="AcHomepage.php" method="post">
    <input type="submit" name="Fp" value="forgot password??" style="color:green; font-weigt:bold">
    </form>
    <form action="AccSignin.php" method="post">
    <input type="submit" name="AccSignin" value="SignIn" style="color:green; font-weigt:bold">
    </form>
    
    <?php
    //var username;
     $_SESSION['username']=$username;        
     echo  $_SESSION['username'];
     ?>
    
    
    <div>
    <?php/* include '../view/footer.php' */?>
  </div>
    
    
</body>
</html>