<?php
include('connection.php');
?>


<html>

<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/homepage.css">

<title>
HomePage
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
<a class= "active" href="#default"> Home</a>
<a href="gallery.php">Gallery</a>
  <a href="contact.php">Contact Us</a>
  <a href="locate.php">Location</a>
  <a href="about.php">About</a>
  <?php
        if ((isset($_SESSION['username'])) && ($_SESSION['usertype']=='h')) {
            echo "<a href=\"welcome.php\">Welcome " . ($_SESSION['username']) . " </a>";
			echo "<a href=\"logout.php\"> Logout </a>";
		} 
		else if ((isset($_SESSION['username'])) && ($_SESSION['usertype']=='m')){
			echo "<a href=\"logout.php\"> Logout </a>";
		}
		else {
                echo "<br>";
        }
	?>
</div>

<div class=container2>

<body>
    <div class="container2">
		
		<?php
        
				
				echo"<center><div class=\"form-style-8\"><h2>Your feedback has been submitted!!</h2>";
				echo"<h2>Thank you for your feedback!</h2>";
				echo"<a href=\"index.php\"><input type=\"button\" value=\"Back\" /></a>";
				echo"</form></div></center>";
		?>
	  

    </div>
</body>



</div>



</body>
</html>