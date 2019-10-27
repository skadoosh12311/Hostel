<?php
include('connection.php');
?>

<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/studentdetails.css">

<title>
Room Details
</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet"> 

</head>
	
<body>
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
  <?php echo "<a href=\"logout.php\"> Logout </a>"; ?>	
</div>


<body>
    <div class="container">
	<h1 style="font-size:2em;text-align: center">Room Details</h1>
<div class="table-wrapper">
<?php
						
                            $sql1 = "select r.r_id, r.r_type, r.r_finalprice, r.r_checkin, r.r_checkout, s.s_first ,s.s_last,s.s_email,s.s_mobno from room r,student s where s.s_id=r.s_id ";
                            $query1 = mysqli_query($db, $sql1);
							
                            echo "<table class=\"fl-table\" border=1><thead>";
                            echo "<th>First Name</th><th>Last Name</th><th>Mobile No</th></tr>";
                            while ($row1 = $query1->fetch_array()) {
                               echo "<tr>";
								echo "<td>" . $row1['s_first'] . "</a></td>";
								echo "<td>" . $row1['s_last'] . "</a></td>";
								echo "<td>" . $row1['s_mobno'] . "</a></td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            ?>
    <div class="container">
		<div class="form-style-8">
	  <h2>Update details</h2>
	  <form  method="post" action="updatedetails.php">
		<input type="text" name="s_num"  placeholder="Enter mobile no."  required />
		
		<center><input type="submit" name="Update" value="Update Number">
		<a href="welcome.php"><input type="button" value="Back"> </a>
        </center>
        <br>
		<br>
        </form>
</div>
</div>
</div>
</div>
</body>
</html>