<!DOCTYPE html>
<head>
<title> Profile </title>


</head>



<Body>

<div id="demo">
<button type="button" onclick="loadDoc()">See More</button>
</div>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "../view/Status.txt", true);
  xhttp.send();
}
</script>

<?php
    Name:"name.Login.php";
?>

<img src="../view/rashik.jpg" alt="a boy standing with a UKULAYLE"width="300" height="300">
<br> <br>

<a href="ChangePass.php"> Change Password </a> <br><br>


<form method="POST" action="AcHomepage.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
    <input type="submit" value="Back">
    </form>

</Body>
</html>