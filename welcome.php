<?php
include('connection.php');
?>

<html>

<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/welcome.css">

<title>
Welcome
</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet"> 
<style type="text/css">


</style>


</head>
	
<body>

<script type='text/javascript'>
function required(inputtx) 
   {
     if (inputtx.value.length == 0)
      { 
         alert("Fill in the details");  	
         return false; 
      }  	
      return true; 
    }
	
<input type="button" value="Register Now" onclick="window.location.href='www.google.co.in'">
</script>


<header>
<a href="index.php"><p class="logo"><img src="img/logo.png" style= "width:230px;height:100px;margin-top:-10px;margin-left:10px" align="left" </p> 
</a>
</header>

<header class="header1">
</header>


<div class="topnav">
	<a class= "active" href="index.php"> Home</a>
	<a href="gallery.php">Gallery</a>
	<a href="contact.php">Contact Us</a>
	<a href="locate.php">Location</a>
	<a href="about.php">About</a>
	<?php
        if (isset($_SESSION['username'])) {
            echo "<a href=\"#\">Welcome " . ($_SESSION['username']) . " </a>";
			echo "<a href=\"logout.php\"> Logout </a>";
		} else {
                echo "";
        }
	?>
</div>


<body>

<div class="container">
	<video autoplay loop muted style="width:1000px;height:650px;float:right;margin-top:20px;margin-right:150px;" controls>
  <source src="videos/video.mp4" type="video/mp4">
</video>

   
		<h1 style="float:left; margin-left:30px"> Hello Hosteler!</h1><br><br><br><br><br><br><br>
	
		<div class="div1"><center>
	<a href="booking.php"><input type="button"  value="Book a room"></a><br><br>
	<a href="studentdetails.php"><input type="button"  value="Student details"></a><br><br>
	<a href="roomdetails.php"><input type="button"  value="Room details"></a><br><br>
	<a href="updatedetails.php"><input type="button"  value="Update details"></a><br><br></center>
	</div>	
</div>



</body>
</html>