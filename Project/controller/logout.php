<?php

session_start();

if(session_destroy())
{
setcookie("userName", $cookie_value, time() - (86400 * 50), "/"); 
header("Location: ../view/Userlogin.php");
}

?>