<?php 

session_start();
$user=$blood="";
if(isset($_SESSION['username']))
{
  $user=$_SESSION['username'];
      if($_SERVER["REQUEST_METHOD"]=="POST")
    {   

    }

}
else{

  header("Location:Userlogin.php");
}

?>
