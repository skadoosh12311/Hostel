\<?php
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
<a href="index.php"><p class="logo"><img src="img/logo.png" style= "width:230px;height:100px;margin-top:-10px;margin-left:10px" align="left" </p> 
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
        if (isset($_SESSION['username'])) {
			if($_SESSION['usertype']=='h'){
				echo"<h1 style=\"float:left; margin-left:30px\"> Hello Hosteler!</h1><br><div class=\"div1\">
				<center>
				<a href=\"booking.php\"><input type=\"button\" name=\"add\" value=\"Book a room\"></a><br><br>
				<a href=\"studentdetails.php\"><input type=\"button\" name=\"details\" value=\"Student details\"></a><br><br>
				<a href=\"roomdetails.php\"><input type=\"button\" name=\"add\" value=\"Room details\"></a><br><br>
				<a href=\"updatedetails.php\"><input type=\"button\" name=\"update\" value=\"Update details\"></a><br>
				</center>
				</div>
				<video autoplay loop muted style=\"width:1000px;height:603px;float:right;margin-top:20px;margin-right:150px;\" controls>
						<source src=\"videos/video.mp4\" type=\"video/mp4\"></video>";
				
				
			}				
            else if ($_SESSION['usertype']=='m'){
                echo "<video autoplay loop muted style=\"width:1000px;height:650px;float:right;margin-top:20px;margin-right:150px;\" controls>
					  <source src=\"videos/video.mp4\" type=\"video/mp4\">
					</video>

						<h1 style=\"float:left; margin-left:30px\"> Hello Manager!</h1><br><br><br><br><br><br><br><br><br>
						<div class=\"div2\">
						<form>
						<a href=\"Mstudentdetails.php\"><input type=\"button\" name=\"details\" value=\"Student details\"></a>
						<a href=\"Mroomdetails.php\"><input type=\"button\" name=\"status\" value=\"Room status\"></a>
						
						
						</form>
						</div>";
			}
		}
		else{
				
				echo"<div class=\"form-style-8\"><h2>Login to your account</h2>";
				echo"<form action=\"index.php\" method=\"post\">";
				echo"<input pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$\" type=\"text\" name=\"s_email\" placeholder=\"Email ID\" required />";
				echo"<input type=\"password\" name=\"s_pass\" placeholder=\"Password\" required />";
				echo"<input type=\"submit\" onclick=\"test_str()\" name=\"Hlogin\" value=\"User Login\">";
				
				echo"<a href=\"register.php\"><input type=\"button\" value=\"Register Now\" /></a>";
				echo"<a href=\"manager.php\"><input type=\"button\" value=\"Manager Login\" /></a>";
				echo"<br><br>";
				echo"<a href=\"feedback.php\">Give feedback!</a>";
				echo"</form></div>";
		}
			
		?>
	  

    </div>
</body>



</div>



</body>
</html>