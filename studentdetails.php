<?php
include('connection.php');
?>

<html>

<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/studentdetails.css">

<title>
Welcome
</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet"> 
<style type="text/css">

</style>


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
</div>

<body>
    <div class="container">
	<h1 style="font-size:2em;text-align: center">Student Details</h1>
<div class="table-wrapper">
<?php
							$name = $_SESSION['username'];
                            $sql1 = "select s_first, s_middle, s_last, s_course, s_gender, s_address, s_email from student where s_first='$name' ";
                            $query1 = mysqli_query($db, $sql1);
							
                            echo "<table class=\"fl-table\" border=1><thead>";
                            echo "<tr><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Course</th><th>Gender</th><th>Address</th><th>Email</th></tr>";
                            while ($row1 = $query1->fetch_array()) {
                                echo "<tr>";
                                echo "<td>" . $row1['s_first'] . "</a></td>";
								echo "<td>" . $row1['s_middle'] . "</a></td>";
								echo "<td>" . $row1['s_last'] . "</a></td>"; 
								echo "<td>" . $row1['s_course'] . "</a></td>";
								echo "<td>" . $row1['s_gender'] . "</a></td>";
                                echo "<td>" . $row1['s_address'] . "</td>";
                                echo "<td>" . $row1['s_email'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            ?>
    <table >
        
        <tr>
            
        </tr>
		
		<a href="welcome.php"><input type="button" value="Back"> </a>
        </thead>
</div>
	
</div>



</body>
</html>