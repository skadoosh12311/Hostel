<?php
include('connection.php');
?>

<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/homepage.css">

<title>
Room booking
</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/booking.css">

</head>
<body>
<script type='text/javascript'>
var dateToday = new Date();
var dates = $("#from, #to").datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,
    minDate: dateToday,
    onSelect: function(selectedDate) {
        var option = this.id == "from" ? "minDate" : "maxDate",
            instance = $(this).data("datepicker"),
            date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
        dates.not(this).datepicker("option", option, date);
    }
});
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

<div class=container>

<body>
    <div class="container">
		<div class="form-style-8">
	  <h2>Book your room</h2>
	  
			
<form action="booking.php" method="post">
<fieldset class="radiogroup">
<legend>Room type</legend>
	<select name="r_price" >
			<option value = "0" disabled selected hidden >Choose Room</option>
            <option value = "899">Male dorm : 899/-</option>
			<option value = "799">Female dorm : 799/-</option>
            <option value = "699">Mixed dorm : 699/-</option>
			<option value = "1299">Deluxe Private dorm : 1299/- </option>
        </select>
	
</fieldset>

<fieldset class="radiogroup">
<legend><b>Checkin Date<b></legend>
	<ul class="radio">
		<input type="date" id="from" name="r_checkin" required />
	</ul>
</fieldset>

<fieldset class="radiogroup">
<legend><b>Checkout Date<b></legend>
	<ul class="radio">
		<input type="date" id="to" name="r_checkout" required />
	</ul>
</fieldset><center>
 <input type="submit" name="room" value="Book Room">	
 <a href="welcome.php"><input type="button" value="Cancel"></a>
</form>
</div>
</div>
</body>
</div>
</body>
</html>