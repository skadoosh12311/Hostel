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
<style type="text/css">

@import url('https://fonts.googleapis.com/css?family=Pacifico&display=swap');


.form-style-8{
	font-family: 'Open Sans Condensed', arial, sans;
	width: 200px;
	padding: 30px;
	background: #FFFFFF;
	margin: 50px auto;
	box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

}
.form-style-8 h2{
	background: #4D4D4D;
	text-transform: uppercase;
	font-family: 'Open Sans Condensed', sans-serif;
	color: #797979;
	font-size: 18px;
	font-weight: 100;
	padding: 20px;
	margin: -30px -30px 30px -30px;
}
.form-style-8 input[type="text"],
.form-style-8 input[type="date"],
.form-style-8 input[type="datetime"],
.form-style-8 input[type="email"],
.form-style-8 input[type="number"],
.form-style-8 input[type="search"],
.form-style-8 input[type="time"],
.form-style-8 input[type="url"],
.form-style-8 input[type="password"],
.form-style-8 textarea,
.form-style-8 select 
{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	outline: none;
	display: block;
	width: 100%;
	padding: 8px;
	border: none;
	border-bottom: 1px solid #ddd;
	background: transparent;
	margin-bottom: 5px;
	font: 16px Arial, Helvetica, sans-serif;
	height: 45px;
}
.form-style-8 textarea{
	resize:none;
	overflow: hidden;
}
.form-style-8 input[type="button"], 
.form-style-8 input[type="submit"]{
	-moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	-webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	box-shadow: inset 0px 1px 0px 0px #45D6D6;
	
	background-color: #2CBBBB;
	border: 1px solid #27A0A0;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	float: left;
	font-family: 'Open Sans Condensed', sans-serif;
	font-size: 14px;
	margin-top:5px;
	padding: 10px 20px;
	text-decoration: none;
	text-transform: uppercase;
}


.form-style-8 input[type="button"]:hover, 
.form-style-8 input[type="submit"]:hover {
	background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
	background-color:#34CACA;
}

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
	<h1 style="font-size:2em;text-align: center">Room details</h1>
<div class="table-wrapper">
<?php
							$s_id = $_SESSION['s_id'];
							
                            $sql1 = "select r_id, r_type, r_finalprice, r_checkin, r_checkout from room where s_id='$s_id' ";
                            $query1 = mysqli_query($db, $sql1);
							
                            echo "<table class=\"fl-table\" border=1><thead>";
                            echo "<tr><th>Room id</th><th>Room type</th><th>Room price</th><th>Room checkin</th><th>Room checkout</th></tr>";
                            while ($row1 = $query1->fetch_array()) {
                                echo "<tr>";
                                echo "<td>" . $row1['r_id'] . "</a></td>";
								echo "<td>" . $row1['r_type'] . "</a></td>";
								echo "<td>" . $row1['r_finalprice'] . "</a></td>"; 
								echo "<td>" . $row1['r_checkin'] . "</a></td>";
								echo "<td>" . $row1['r_checkout'] . "</a></td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            ?>
    <table >
        <a href="welcome.php"><input type="button" value="Back"> </a>
        <tr>
            
        </tr>
        </thead>
</div>
	
</div>



</body>
</body>
</html>