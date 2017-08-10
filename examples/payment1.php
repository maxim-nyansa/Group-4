<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../pic/pro.png">
	<link rel="icon" type="image/png" href="../pic/pro.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Profile</title>

	<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<?php
if (!isset($_POST['submit'])) {

	$errmsg_arr = array();
	
	$errflag = false;
	
	$con = mysql_connect("localhost","root","realer");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("oceangreen", $con);

	
$confirmation = $_POST['confirmation'];
	$arival = $_POST['start'];
	$departure = $_POST['end'];
	$adults = $_POST['adult'];
	$child = $_POST['child'];	
	$nroom = $_POST['n_room'];
	$roomid = $_POST['rm_id'];
	$result = $_POST['result'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$result5 = mysql_query("SELECT * FROM reservation where email='$email' and password='$password'");
while($row2 = mysql_fetch_array($result5))
  {
  $name = $row2['firstname'];
	$last = $row2['lastname'];
	$address = $row2['province'];
	$city = $row2['city'];
	$zip = $row2['zip'];
	$country = $row2['country'];
	$password = $row2['password'];
	$email = $row2['email'];
	$cnumber = $row2['contact'];
  
  }
	$result1 = mysql_query("SELECT * FROM room where room_id='$roomid'");
while($row = mysql_fetch_array($result1))
  {
  $rate=$row['rate'];
  $type=$row['type'];
  
  }
  $payable= $rate*$result*$nroom;
	
	
	
	//send the email
		$to = $email;
		$subject="Reservation notification From Tamera Plaza Inn";
		$from = 'tameraplazainn@gmail.com';
		$body = "First Name: $name\n".
		"Last Name: $last\n".
		"Email: $email \n".
		"City: $city \n".
		"Zip Code: $zip \n".
		"Country: $country \n".
		"Contact Number: $cnumber \n".
		"Password: $password \n".
		"Check In: $arival\n ".
		"Check Out: $departure\n ".
		"Number of Adults: $adults\n ".
		"Number of child: $child\n ".
		"Total nights of stay: $result\n ".
		"Room Type: $type\n ".
		"Number of rooms: $nroom\n ".
		"Payable amount: $payable\n ".
		"Confirmation Number: $confirmation\n ";	
		
		$headers = "From: $from \r\n";
		$headers .= "Reply-To: $$from \r\n";
		
		mail($to, $subject, $body,$headers);
	
	$sql="INSERT INTO reservation (arrival, departure, adults, child, result, room_id, no_room, firstname, lastname, city, zip, province, country, email, contact, password, payable, confirmation)
VALUES
('$arival','$departure','$adults','$child','$result','$roomid','$nroom','$name','$last','$city','$zip','$address','$country','$email','$cnumber','$password','$payable','$confirmation')";
mysql_query("INSERT INTO roominventory (arrival, departure, qty_reserve, room_id, confirmation) VALUES ('$arival','$departure','$nroom','$roomid','$confirmation')");
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

}
mysql_close($con)

	
?>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>

</head>

<body class="profile-page">
	<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="home.html">oceangreen.com</a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
					
					<a href="contacts.php">Contact  </a>
					<a href="about.html" >About</a>
					<a href="https://www.facebook.com/williamquame.alaska" target="_blank" ><img src="../pics/fb.png" height="40", width="45" class="btn btn-simple btn-white btn-just-icon"/></a><a href="https://www.linkedin.com/in/william-asare-yirenkyi-0b987a108/" target="_blank" ><img src="../pics/lnkd.png" height="40", width="45" class="btn btn-simple btn-white btn-just-icon"/></a><a href="https://www.instagram.com/junea_alaska/" target="_blank" ><img src="../pics/insta.jpeg" height="40", width="45" class="btn btn-simple btn-white btn-just-icon"/></a>		           
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('../pics/ocean.jpg');"></div>

		<div class="main main-raised">
			<div class="profile-content">
	            <div class="container">
	                <div class="row">
	                    <div class="profile">
	                        
	                        <div class="name">
	                            <h2 class="title">Ocean Green Beach Villa</h2>
								<p class="title">The Best Resort </p>
    							
	                        </div>
	                    </div>
	                </div>


	                <body>
<div class="mainwrapper">
  <div class="leftother">
    <div class="l"></div>
	<div class="r">
	
	
	
	
	<div class="right3">



<form action="https://www.sandbox.paypal.com/cgi-bin/webscr"  method="post">
        <!-- the cmd parameter is set to _xclick for a Buy Now button -->
        
	 <div class="reservation" style="margin-left: 176px; width: 400px;">
	  <div align="center" style="padding-top: 7px; font-size:24px;"><strong>RESERVATION  DETAILS</strong></div>
	<div style="margin-top: 14px;">
<label style="margin-left: 73px;">Check In Date : <?php echo $arival; ?></label><br />
<label style="margin-left: 58px;">Check Out Date : <?php echo $departure; ?></label><br />
<label style="margin-left: 130px;">Adults : <?php echo $adults; ?></label><br />
<label style="margin-left: 137px;">Child : <?php echo $child; ?></label><br />
<label style="margin-left: 42px;">Number of Rooms : <?php echo $nroom; ?></label><br />
<label style="margin-left: 110px;">Room ID : <?php echo $roomid; ?></label><br />
<label style="margin-left: 52px;">Number of nights : <?php echo $result; ?></label><br />
<label style="margin-left: 101px;">Firstname : <?php echo $name; ?></label><br />
<label style="margin-left: 102px;">Lastname : <?php echo $last; ?></label><br />
<label style="margin-left: 114px;">Address : <?php echo $address; ?></label><br />
<label style="margin-left: 146px;">City : <?php echo $city; ?></label><br />
<label style="margin-left: 108px;">ZIP Code : <?php echo $zip; ?></label><br />
<label style="margin-left: 117px;">Country : <?php echo $country; ?></label><br />
<label style="margin-left: 133px;">Email : <?php echo $email; ?></label><br />
<label style="margin-left: 56px;">Contact Number : <?php echo $cnumber; ?></label><br />      <BR />
  </div>
	
	<input type="hidden" name="cmd" value="_xclick" />
        <input type="hidden" name="business" value="jpabs78@gmail.com" />
        <input type="hidden" name="item_name" value="<?php echo $type; ?>" />
        <input type="hidden" name="item_number" value="<?php echo $nroom; ?>" />
        <input type="hidden" name="amount" value="<?php echo $payable; ?>" />
        <input type="hidden" name="no_shipping" value="1" />
        <input type="hidden" name="no_note" value="1" />
        <input type="hidden" name="currency_code" value="PHP" />
        <input type="hidden" name="lc" value="GB" />
        <input type="hidden" name="bn" value="PP-BuyNowBF" />
        <input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but23.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" style="margin-left: 157px;" />
        <img alt="fdff" border="0" src="https://www.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1" />
        <!-- Payment confirmed -->
        <input type="hidden" name="return" value="https://www.chmscians.com/paypal/showconfirm.php" />
        <!-- Payment cancelled -->
        <input type="hidden" name="cancel_return" value="http://www.chmscians.com/paypal/cancel.php" />
        <input type="hidden" name="rm" value="2" />
        <input type="hidden" name="notify_url" value="http://www.chmscians.com/paypal/ipn.php" />
        <input type="hidden" name="custom" value="any other custom field you want to pass" />
      </form>
 
  </div>
	
	
	
	
	
	
	
	
	
	</div>
  </div>
  
  
  
  
  
  
  <div class="rightother">
  
 
  
  
  </div>
  
  
  
  
  
  
</div>
<div class="footer" style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;">copyright © tameraplazainn 2011 - 2012 All Rights reserved</div>
</body>






	            </div>
	        </div>
		</div>


</body>
	<!--   Core JS Files   -->
	<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="../assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="../assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="../assets/js/material-kit.js" type="text/javascript"></script>

</html>

