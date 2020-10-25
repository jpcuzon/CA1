<!DOCTYPE html>
<html lang="en">
<title>PHP Project 1</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/mycss.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!--the navbar is taken from: https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_band&stacked=h-->
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-dark-gray w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white <?php if($current == "index"){echo "w3-gray";}else{echo "w3-dark-gray";}?>">Home</a>
    <a href="table.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white <?php if($current == "table"){echo "w3-gray";}else{echo "w3-dark-gray";}?>">Capitals</a>
    <a href="search.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white <?php if($current == "search"){echo "w3-gray";}else{echo "w3-dark-gray";}?>">Search a Capital</a>
    
    <!--
        The if statement inside the links determines if the current page matches the link. If the user is in the said page, the link will change color
        and the other inactive links will match the color of the navbar.
    -->

  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
</div>

