<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../pic/pro.png">
	<link rel="icon" type="image/png" href="../pic/pro.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Profile</title>

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


								<link href="css/main.css" rel="stylesheet" type="text/css" />
<?php
//lotus.x10hosting.com:2083/frontend/x3/filemanager/editit.html?file=selectroom.php&fileop=&dir=%2Fhome%2Fargie%2Fpublic_html&dirop=&charset=&file_charset=windows-1252&baseurl=&basedir=
	
	$arival = $_POST['start'];
	$departure = $_POST['end'];
	$adults = $_POST['adult'];
	$child = $_POST['child'];	
	
?>

<!--sa pop up-->

 <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>


<!--sa error trapping-->
<script type="text/javascript">
function validateForm()
{

var y=document.forms["room"]["no_rooms"].value;
var a=document.forms["room"]["madult"].value;
var b=document.forms["room"]["adult"].value;

if ((y==null || y==""))
  {
  alert("all field are required!");
  return false;
  }


/*if (b>a)
  {
  alert("dfdfdfdfdfdfdf");
  return false;
  }*/

}
</script>
<!--sa minus date-->
<script type="text/javascript">
	// Error checking kept to a minimum for brevity
 
	function setDifference(frm) {
	var dtElem1 = frm.elements['start'];
	var dtElem2 = frm.elements['end'];
	var resultElem = frm.elements['result'];
	 
// Return if no such element exists
	if(!dtElem1 || !dtElem2 || !resultElem) {
return;
	}
	 
	//assuming that the delimiter for dt time picker is a '/'.
	var x = dtElem1.value;
	var y = dtElem2.value;
	var arr1 = x.split('/');
	var arr2 = y.split('/');
	 
// If any problem with input exists, return with an error msg
if(!arr1 || !arr2 || arr1.length != 3 || arr2.length != 3) {
resultElem.value = "Invalid Input";
return;
	}
	 
var dt1 = new Date();
dt1.setFullYear(arr1[2], arr1[1], arr1[0]);
var dt2 = new Date();
dt2.setFullYear(arr2[2], arr2[1], arr2[0]);

resultElem.value = (dt2.getTime() - dt1.getTime()) / (60 * 60 * 24 * 1000);
}
</script>



<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>

</head>

<body>
<div class="mainwrapper">
  <div class="leftother">
    <div class="l"></div>
	<div class="r">
	
	
	
	
	<div class="right3">
  <form action="personnalinfo.php" method="post" onsubmit="return validateForm()" name="room">
  <input name="start" type="hidden" value="<?php echo $arival; ?>" />
  <input name="end" type="hidden" value="<?php echo $departure; ?>" />
  <input name="adult" type="hidden" value="<?php echo $adults; ?>" />
  <input name="child" type="hidden" value="<?php echo $child; ?>" />
  
  
  <label style="margin-left: 119px;">Number of rooms: </label><INPUT id="txtChar" onkeypress="return isNumberKey(event)" type="text" name="no_rooms" class="ed">
 <span id="errmsg"></span>
  <br />
  <br />
<?php
$con = mysql_connect("localhost","root","realer");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("oceangreen", $con);

$result = mysql_query("SELECT * FROM room");

while($row = mysql_fetch_array($result))
  {
  $a=$row['room_id'];
  $query = mysql_query("SELECT sum(qty_reserve) FROM roominventory where arrival <= '$arival' and departure >= '$departure' and room_id='$a'");
while($rows = mysql_fetch_array($query))
  {
  $inogbuwin=$rows['sum(qty_reserve)'];
  }
  $angavil = $row['qty'] - $inogbuwin;
  echo '<div style="height: 117px;">';
	  echo '<div style="float: left; width: 100px; margin-left: 19px;">';
	  echo "<img width=92 height=72 alt='Unable to View' src='" . $row["image"] . "'>";
	  echo '</div>';
	  echo '<div style="float: right; width: 575px; margin-top: -10px;">';
	  echo '<span class="style5">'.'Avalable Rooms: '.$angavil.'</span>';
	  if ($angavil > 0){
					echo '<input name="roomid" type="checkbox" value="' .$row["room_id"]. '" />';
					echo '<input type="submit" name="Submit" value="reserve" onclick="setDifference(this.form);"/>';
					}
				if ($angavil <= 0){
				echo '<span class="style5">'.'wala chansa wala gid vacant'.'</span>';
				}	
	  echo '<br>';		
	  echo '<span class="style5">'.'Room Type: '.$row['type'].'</span><br>';
	  echo '<span class="style5">'.'Room Rate: '.$row['rate'].'</span><br>';
          echo '<span class="style5">'.'Max Child: '.$row['max_child'].'</span><br>';
          echo '<input name="mchild" type="hidden" value="' .$row["max_child"]. '" />';
echo '<input name="avail" type="hidden" value="' .$angavil. '" />';
	  echo '<span class="style5">'.'Max Adult: '.$row['max_adult'].'</span><br>';
          echo '<input name="madult" type="hidden" value="' .$row["max_adult"]. '" />';
	  echo '<span class="style5">'.'Room Description: '.$row['description'].'</span><br>';
	  echo '</div>';
  echo '</div>';
}

mysql_close($con);
?> 
<input type="hidden" name="result" id="result" />
</form>
  </div>
	
	
	
	
	
	
	
	
	
	</div>
  </div>
  
  
  
  
  
  
  <div class="rightother">
  
  <div class="reservation">
	  <div align="center" style="padding-top: 7px; font-size:24px;"><strong>RESERVATION  DETAILS</strong></div>
	<div style="margin-top: 14px;">
<label style="margin-left: 16px;">Check In Date : <?php echo $arival; ?></label><br />
<label style="margin-left: 3px;">Check Out Date : <?php echo $departure; ?></label><br />
<label style="margin-left: 71px;">Adults : <?php echo $adults; ?></label><br />
<label style="margin-left: 78px;">Child : <?php echo $child; ?></label><br />
      <BR />
  </div>
	
	
	</div>
  
  
  </div>
  
  
  
  
  
  
</div>
<div class="footer" style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;">copyright © tameraplazainn 2011 - 2012 All Rights reserved</div>
</body>
    							
	                        </div>
	                    </div>
	                </div>
	               

	            </div>
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

