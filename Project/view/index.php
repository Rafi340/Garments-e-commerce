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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Homepage</title>
			<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <div class="center" ></div>
    <div class="center1" >
        <div class="absolute1"style="right: 900px;"><input type="submit" value="Log In" name="login" style="font-family:Cooper Black;font-size:14.25pt;color:maroon;background-color: rgb(224,255,255); height:45px;width:120px;cursor: pointer;border:none"></div>
        <div class="absolute4"><input type="submit" value="Home" name="home" style="font-family:Cooper Black;font-size:14.25pt;color:maroon;background-color: rgb(224,255,255); height:45px;width:120px;cursor: pointer;border:none"></div>
        <div class="absolute5"><img src="image/tex3.jpg" alt="textile field" width="70px" height="60px"></div>
        <div class="absolute6"><img src="image/tex4.jpg" alt="textile field" width="200px" height="50px"></div>
    </div>

    <div class="center2" >
    <div class="absolute7"><img src="image/tex5.jpg" alt="textile" width="70px" height="60px"></div>
    <div class="absolute8"><img src="image/welcome.jpg" alt="textile" width="250px" height="40px"></div>
    <div class="absolute9">  The word “textile” was originally used to define a woven fabric and the processes involved in weaving.Textile refers to any material made of interlacing fibers or Yarns.  The yarn is produced by spinning raw fibers of wool, flax, cotton, or other material to produce long strands.Textiles are formed by weaving, knitting, crocheting, knotting, or pressing fibers together (felt).The production of textiles is a craft whose speed and scale of production has been altered almost beyond recognition by industrialization and the introduction of modern manufacturing techniques. However, for the main types of textiles, plain weave, twill, or satin weave, there is little difference between the ancient and modern methods. </div>
    </div>
    <div class="center3" >
    
    <div class="absolute10"><img src="image/tex6.jpg" alt="Blood" width="270px" height="170px"></div>
    <div class="absolute11"><img src="image/tex7.jpg" alt="Blood" width="270px" height="170px"></div>
    <div class="absolute12"><img src="image/tex8.jpg" alt="Blood" width="275px" height="170px"></div>  
    </div>
</form>
</body>
</html>
