<?php
include('connection.php');
?>

<html>

<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/managerlogin.css">

<title>
Student Details
</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet"> 
<style type="text/css">


</style>


</head>
	
<body>
<header>
<a href="index.php"><p class="logo"><img src="img/logo.png" style= "width:230px;height:100px;margin-top:0px;margin-left:10px" align="left" </p> 
</a>
</header>

<header class="header1">
</header>


<div class="topnav">
<a class= "active" href="index.php"> Home</a>
<a href="gallery.html">Gallery</a>
  <a href="contact.html">Contact Us</a>
  <a href="locate.html">Location</a>
  <a href="about.html">About</a>
  <?php
        if ((isset($_SESSION['username'])) && ($_SESSION['usertype']=='m')){
			echo "<a href=\"logout.php\"> Logout </a>";
		}
		else {
                echo "<br>";
        }
	?>
</div>


<body>
    <div class="container">
	<video autoplay loop muted style="width:1000px;height:650px;float:right;margin-top:20px;margin-right:150px;" controls>
  <source src="videos/video.mp4" type="video/mp4">
</video>

	<h1 style="float:left; margin-left:30px"> Hello Manager!</h1><br><br><br><br><br><br><br><br><br>
	<div class="div1">
	<form>
	<a href="Mstudentdetails.php"><input type="button" name="details" value="Student details"></a>
	<a href="Mroomdetails.php"><input type="button" name="status" value="Room status"></a>
	<a href="deleteroom.html"><input type="button" name="remove" value="Remove room"></a>
	</form>
	</div>
</div>
</body>
</html>