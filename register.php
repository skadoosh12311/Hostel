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
	  <h2>Sign Up</h2>
	  <form action="register.php" method="post">
		<input name="s_first" type="text" placeholder="First name" required />
		<input name="s_middle" type="text" placeholder="Middle name"/>
		<input name="s_last" type="text" placeholder="Last name" required />
		<input name="s_mobno" type="text" placeholder="Mobile No" required />
		<input name="s_course" type="text" placeholder="Course" required />
		<select name="s_gender" id = "gender" style="color:Grey">
			<option value = "0" disabled selected hidden >Choose Gender</option>
            <option value = "Male">Male</option>
			<option value = "Female">Female</option>
            <option value = "Others">Others</option>
        </select>
		<textarea name="s_address" pattern=".{25,)" placeholder="Address...." style="height:100px"></textarea>
		<input name="s_email" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  placeholder="Email" required />
		<input name="s_pass" type="password" placeholder="Password" required />
		<input type="submit" name="register" value="Sign up">
  </form>
</div>
    </div>
</body>



</div>



</body>
</html>