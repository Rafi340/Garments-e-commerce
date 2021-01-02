

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="login.css">


</head>

<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <div class="center" ></div>     
    <div class="center1" >
    <div class="absolute"style="top:77px; right: 980px"><img src="image/tex1.jpg" alt="textile field" width="70px" height="60px"></div>
    <div class="absolute"style="top:82px; right: 900px"><img src="image/tex2.jpg" alt="textile field" width="200px" height="50px"></div>   
    <div class="absolute"style="top:85px; right: 270px"><a href="UserView.php"> <img src="image/home.PNG" alt="Home" style="height:50px;width:50px"></a></div>  
    <div class="absolute"style="top:85px; right: 210px"> <a href="Update_Info.php"> <img  src="image/back.PNG" alt="Back" style="height:50px;width:50px"></a> </div>  
  </div>

    <div class="center2" >  
    <div class="absolute"style="top:82px; right: 900px"><img src="image/tex3.jpg" alt="textile field" width="200px" height="50px"></div>  
     <div class="absolute1" style="top:170px;right:490px;font-size:27px;color:maroon;"><pre><b>CHANGE PASSWORD</b></pre></div>
    <div class="absolute2" style="top:240px;font-size:20px;right:600px"><pre>    <b><font color="blue">Old Password:</font></b>     <input type="password" name="opd" value="" placeholder="Enter old password"style="height:25px"><span style="height:10px;color:red;font-size:25px;font-family:Monotype Corsiva"></span><span style="height:10px;color:red;font-size:25px;font-family:Monotype Corsiva"></span><span style="height:10px;color:red;font-size:20px;font-family:Monotype Corsiva"></span></pre></pre></div>
     <div class="absolute2" style="top:290px;font-size:20px;right:600px"><pre>    <b><font color="blue">New Password:</font></b>     <input type="password" id="passcheck" name="pwd" value="" onkeyup="pass_check()" placeholder="Enter new password"style="height:25px"><span style="height:10px;color:red;font-size:25px;font-family:Monotype Corsiva"></span><span style="height:10px;color:red;font-size:25px;font-family:Monotype Corsiva"></span><span style="height:10px;color:red;font-size:20px;font-family:Monotype Corsiva"><label id="pwd_font">*Minimum length 6! </label></span></pre></div>
     <div class="absolute2" style="top:350px;font-size:20px;right:600px"><pre>    <b><font color="blue">Re-Type Password:</font></b> <input type="password" id="rpasscheck" name="rpwd" value="" onkeyup="pass_check()" placeholder="re-type password"style="height:25px"><span style="height:10px;color:red;font-size:25px;font-family:Monotype Corsiva"></span><span style="height:10px;color:red;font-size:25px;font-family:Monotype Corsiva"></span><span style="height:10px;color:red;font-size:20px;font-family:Monotype Corsiva"><label id="rpwd_font">*password does not match!</label></span></pre></div>
    <div class="absolute2" style="top:400px; right: 360px"><pre>   <input type="submit" id="conbtn" name="" value="Confirm" style="background-color: rgb(30,144,255);color:maroon;width:150px;height:47px;font-size:22px" ></pre></div>
    </div>
    <div class="center3" >    </div>
</form>
</body>
</html>
