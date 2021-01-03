<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    if($_POST["login"])
    {
        header("Location:Userlogin.php");
    }
    elseif($_POST["home"])
    {
        header("Location:index.php");
    }


}

?>