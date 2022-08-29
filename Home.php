<!DOCTYPE html>
<html>
<head>
<title>Traffic Accident Data Anlysis</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

</style>
</head>
<body>

<!-- Navbar  -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#introduction" class="w3-bar-item w3-button">INTRODUCTION</a>
    <a href="#analysis" class="w3-bar-item w3-button w3-hide-small"></i>ANALYSIS</a>
    <a href="#visualisation" class="w3-bar-item w3-button w3-hide-small"></i>VISUALISATION</a>
    <a href="#credits" class="w3-bar-item w3-button w3-hide-small"></i>CREDITS</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="w3-content w3-container w3-padding-64" id="introduction">

    <h1>TRAFFIC ACCIDENT DATA ANALYSIS</h1>

  <p>A little description of the project and analysis</p>

</div>

<!-- Container -->
<div class="w3-content w3-container w3-padding-64" id="analysis">
  <form action="AddProducts.php" method="POST" enctype="multipart/form-data">
  Varaible: <input type="text" name="SKU"><br><br>
  Varaible: <input type="text" name="Name"><br><br>
  Varaible: <input type="number" name="Qty"><br><br>
  Varaible: <input type="text" name="CP"><br><br>
  Varaible:<br><input type="text" name="SP"><br><br>
  <input type="submit" value="submit" name="submit">
  </form>

</div>


<!-- Container -->
<div class="w3-content w3-container w3-padding-64" id="visualisation">
  <h3 class="w3-center">visualisation</h3>

</div>

<!-- Container -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">CREDITS</h3>

</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
</footer>

<script>
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}


</script>

</body>
</html>
