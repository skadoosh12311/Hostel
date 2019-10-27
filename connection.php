<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'hostel');

if (isset($_POST['register'])) {
    $s_first = $_POST['s_first'];
	$s_middle = $_POST['s_middle'];
    $s_last = $_POST['s_last'];
	$s_mobno = $_POST['s_mobno'];
	$s_course = $_POST['s_course'];
	$s_gender = $_POST['s_gender'];
	$s_address = $_POST['s_address'];
	$s_email = $_POST['s_email'];
    $s_pass = $_POST['s_pass'];
	
    $errormsg = "A User already exist with the same Email id. Please try with another Email id";
    
    $sql1 = "select * from student where s_email=('$s_email')";
    $query1 = mysqli_query($db, $sql1);
        if (mysqli_num_rows($query1) > 0) {
            echo '<script type="text/javascript">alert("' . $errormsg . '")</script>';
        } else {
            $sql2 = "insert into student (s_first, s_middle, s_last, s_mobno,s_course, s_gender, s_address, s_email, s_pass) values ('$s_first', '$s_middle', '$s_last', '$s_mobno', '$s_course', '$s_gender', '$s_address', '$s_email', '$s_pass')";
            $query2 = mysqli_query($db, $sql2);
            $_SESSION['username'] = $username;
            header('location: index.php');
        }
    }


if (isset($_POST['Hlogin'])) {
    $emailid = $_POST['s_email'];
    $password = $_POST['s_pass'];

    $msg = "Incorrect Data";
    $sql1 = "select s_id,s_first from student where s_email=('$emailid') AND s_pass=('$password')";
    $query1 = mysqli_query($db, $sql1);
    while ($row = $query1->fetch_assoc()) {
        $username=$row["s_first"];
		$userid=$row["s_id"];
		$usertype="h";
    }
    if (mysqli_num_rows($query1) == 0) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    } else {
        $_SESSION['username'] = $username;
		$_SESSION['s_id'] = $userid;
        $_SESSION['usertype'] = $usertype;
        header('location: welcome.php');
    }
}
if (isset($_POST['Mlogin'])) {
    $emailid = $_POST['m_email'];
    $password = $_POST['m_pass'];

    $msg = "Incorrect Data";
    $sql1 = "select * from manager where m_email=('$emailid') AND m_pass=('$password')";
    $query1 = mysqli_query($db, $sql1);
    while ($row = $query1->fetch_assoc()) {
        $username="jerin";
		$usertype="m";
    }
    if (mysqli_num_rows($query1) == 0) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['usertype'] = $usertype;
        header('location: index.php');
    }
}

if (isset($_POST['room'])) {
    $r_price = $_POST['r_price'];
	if ($r_price =='899'){
		$r_type = 'Male Dorm';
	}
	else if ($r_price =='799'){
		$r_type = 'Female Dorm';
	}
	else if($r_price =='699'){
		$r_type = 'Mixed Dorm';
	}
	else{
		$r_type = 'Deluxe Private Dorm';
	}
	$r_checkin1 = NEW DATETIME($_POST['r_checkin']);
	$r_checkout1 = NEW DATETIME($_POST['r_checkout']);
	$r_checkin = $_POST['r_checkin'];
	$r_checkout = $_POST['r_checkout'];
	$total_days = $r_checkin1->diff($r_checkout1);
	$days=($total_days->d+($total_days->m*31));
	$_SESSION['days'] = $days;
	$errormsg = "Sorry ,Rooms are Unavailable...Try again later";
	$errormsg2 = "Sorry ,You have already booked a room in this hostel ..Please Checkout";
	
	$s_id= $_SESSION['s_id'];
	$r_final_price=$r_price*$days;
	$_SESSION['fprice'] = $r_final_price;
    $sql1 = "select * from room";
    $query1 = mysqli_query($db, $sql1);
        if (mysqli_num_rows($query1) == 25) {
            echo '<script type="text/javascript">alert("' . $errormsg . '")</script>';
		}
		else {
			$sql3 = "select * from room where s_id =('$s_id')";
			$query3 = mysqli_query($db, $sql3);
			if (mysqli_num_rows($query3) > 0){
				echo '<script type="text/javascript">alert("' . $errormsg2 . '")</script>';
			}
			else{
            $sql2 = "insert into room (r_type, r_price, r_checkin, r_checkout, r_finalprice, s_id) values ('$r_type', '$r_price', '$r_checkin', '$r_checkout',$r_final_price, '$s_id')";
            $query2 = mysqli_query($db, $sql2);
            header('location: BookingSuccessfull.php');            
        }
    }
}


if (isset($_POST["DelRoom"]))
        {
				$sql1="select * from room where r_id='".$_POST["Roomid"]."'";
                $result1=mysqli_query($db,$sql1);
                if(mysqli_fetch_assoc($result1))
                {
                      mysqli_query($db,"Delete from room where r_id='".$_POST["Roomid"]."'");
					  $result2 = mysqli_query($db,"select count(*) as count from room");
					  if($result2->num_rows>0){
						  $row = $result2->fetch_assoc(); {
						  $count = $row["count"]+1;
					  }
					  $sql2 ="ALTER TABLE room AUTO_INCREMENT = ('$count')";
					  mysqli_query($db,$sql2);
					  header('location: Mroomdetails.php');
                }
                else
                {
                   
                     
                     echo "<script>alert('Room ID not present')</script>"; 
                }
        }
		}
		
		
if (isset($_POST["Update"]))
	{
		$s_id= $_SESSION['s_id'];
		$s_num = $_POST['s_num'];
		echo $s_id;
		$s_update_details = "select * from student where s_id='$s_id'";
		$errormsg3 = "Sorry Try again";
		
		$result3=mysqli_query($db,$s_update_details);
		if(mysqli_fetch_assoc($result3)){
			$sql3 = "Update student SET s_mobno='$s_num' where s_id ='$s_id'";
			mysqli_query($db,$sql3);
			header('location: UpdateSuccessful.php');
		}
		else{
			echo '<script type="text/javascript">alert("' . $errormsg3 . '")</script>';
		}
	}
	
	
	
	
if (isset($_POST['feedback'])) {
    $q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
	$q4 = $_POST['q4'];
            $sql4 = "insert into feedback (q1,q2,q3,q4) values ('$q1', '$q2', '$q3', '$q4')";
            $query2 = mysqli_query($db, $sql4);
            header('location: FeedbackSuccessful.php');
        
    }