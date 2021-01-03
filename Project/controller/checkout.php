<!DOCTYPE html>
<html>
<head>
	<title>checkout</title>
</head>
<body>
	<div style="display:inline-block;">
    <?php include '../view/header.html' ?>
  </div>

	<h2>Check Out and Complete Your Payment</h2>

<!DOCTYPE html>
<html>
<body>

<div id="demo">
  <h2>Click Here for know Your Status</h2>
  <button type="button" onclick="loadDoc()">Click here</button>
</div>
<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax.txt", true);
  xhttp.send();
}
	

</script>
<a href="BuyerHome.php">
    <button>Back</button>
    </a>
    <a href="b_login.php">
    <button>Log Out</button>
    </a>
    <div>
    <?php include '../view/footer.html' ?>
  </div>
</body>
</html>