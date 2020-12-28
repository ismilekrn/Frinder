<!DOCTYPE html>
<html>
<head>
<br><img src=https://i.imgur.com/GfqbIW4.png width=150>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #8FA382;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 18px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #B2C8A4;
  color: white;
}

.topnav a.active {
  background-color: #B2C8A4;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="Timeline.php">Home</a>
  <a href="UserProfile.php">Profile</a>
  <a href="Favourites.php">Favorites</a>
  <a href="About.php">About</a>
  <a style="float:right" href="logout.php" align=right>Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<div class="topnav" style="padding-left:16px">

</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
