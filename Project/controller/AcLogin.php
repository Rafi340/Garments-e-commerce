<?php 
    session_start();
    $username;
 ?>

<?php
if(isset($_POST['AcLogin'])) 
{
    $username = $_POST["username"];
    try {
        
        if(empty($_POST['username'])) {
            throw new Exception('Fill the empty field');
        }
        
        
        if(empty($_POST['password'])) {
            throw new Exception('Fill the empty field');
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

<?php
$cookie_name = "r";
$cookie_value = "rashik";
setcookie($cookie_name, $cookie_value, time() + (3600), "/");
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>


<html>
<head>
    <title>Accountant LoginForm</title>

</head>
<link rel="stylesheet" href="../view/AcStyle.css">
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
        <td><input type="text" name="username" ></td>
    </tr>
    <tr>
        <td>Password: </td>
        <td><input type="password" name="password" ></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Login" name="AcLogin" ></td>
    </tr>
    </table>
    
    
    
    
    
    <!--<input class="btn" input type="submit" name="submit" value="log In">-->
    </form><br><br>
    <a href="AccSignin.php"> Create an Acc. </a> <br>
    
    <?php
    
    //var username;
    // $_SESSION['username']=$username; 
    SESSION_destroy();       
     ?>
    
    
    <div>
    <?php/* include '../view/footer.php' */?>
  </div>
    
    
</body>
</html>