<?php
include('connection.php');
?>

<html>

<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/register.css">

<title>
Sign Up
</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>



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
<a href="index.php"><p class="logo"><img src="img/logo.png" style= "width:230px;height:100px;margin-top:0px;margin-left:10px" align="left" </p> 
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
</div>

<div class="container">

<body>
    <div class="container">
		<div class="form-style-8">
	  <h2>Feedback Form</h2>
	  <form  method="post">
		
		<textarea name="q1" pattern=".{25,)" placeholder="What was your first impression when you entered the website?" style="height:100px"></textarea>
		<textarea name="q2" pattern=".{25,)" placeholder="How did you first hear about us?" style="height:100px"></textarea>
		<textarea name="q3" pattern=".{25,)" placeholder="Is there anything missing on this page?" style="height:100px"></textarea>
		<textarea name="q4" pattern=".{25,)" placeholder="How likely are you to recommend us to a friend or colleague?" style="height:100px"></textarea>
		<input type="submit" name="feedback" value="Submit">
		<a href="index.php"><input type="button" value="Back"></a>
  </form>
</div>
    </div>
</body>



</div>



</body>
</html>