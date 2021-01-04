<!DOCTYPE html>
<html>
<head>
    <title>Sponsors</title>
</head>
<body>
    <div style="display:inline-block;">
    <?php include '../view/header.html' ?>
  </div>

 

    <!--<h2>Sponsor1</h2>-->

 

<!DOCTYPE html>
<html>

<style>
	
		body{
			background-color: yellow;
		}
	</style>

<body>

 

<div id="demo">
  <h2>Sponsor2</h2>
  <button type="button" onclick="loadDoc()">Continue</button>
</div>
<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajaxAd.txt", true);
  xhttp.send();
}
    

 

</script>
   <a href="AdminProfile.php"> Back </a>
    <div>
    <?php include '../view/footer.html' ?>
  </div>
</body>
</html>