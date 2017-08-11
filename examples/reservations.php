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

    <!--sa calendar-->
<script type="text/javascript" src="js/datepicker.js"></script>
        <link href="css/demo.css"       rel="stylesheet" type="text/css" />
        <link href="css/datepicker.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
//<![CDATA[

function makeTwoChars(inp) {
        return String(inp).length < 2 ? "0" + inp : inp;
}

function initialiseInputs() {
        // Clear any old values from the inputs (that might be cached by the browser after a page reload)
        document.getElementById("sd").value = "";
        document.getElementById("ed").value = "";

        // Add the onchange event handler to the start date input
        datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
}

var initAttempts = 0;

function setReservationDates(e) {
        // Internet Explorer will not have created the datePickers yet so we poll the datePickerController Object using a setTimeout
        // until they become available (a maximum of ten times in case something has gone horribly wrong)

        try {
                var sd = datePickerController.getDatePicker("sd");
                var ed = datePickerController.getDatePicker("ed");
        } catch (err) {
                if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
                return;
        }

        // Check the value of the input is a date of the correct format
        var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

        // If the input's value cannot be parsed as a valid date then return
        if(dt == 0) return;

        // At this stage we have a valid YYYYMMDD date

        // Grab the value set within the endDate input and parse it using the dateFormat method
        // N.B: The second parameter to the dateFormat function, if TRUE, tells the function to favour the m-d-y date format
        var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

        // Set the low range of the second datePicker to be the date parsed from the first
        ed.setRangeLow( dt );
        
        // If theres a value already present within the end date input and it's smaller than the start date
        // then clear the end date value
        if(edv < dt) {
                document.getElementById("ed").value = "";
        }
}

function removeInputEvents() {
        // Remove the onchange event handler set within the function initialiseInputs
        datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
}

datePickerController.addEvent(window, 'load', initialiseInputs);
datePickerController.addEvent(window, 'unload', removeInputEvents);

//]]>
</script>

<!--sa error trapping-->
<script type="text/javascript">
function validateForm()
{
var x=document.forms["index"]["start"].value;
if (x==null || x=="")
  {
  alert("you must enter your check in Date(click the calendar icon)");
  return false;
  }
var y=document.forms["index"]["end"].value;
if (y==null || y=="")
  {
  alert("you must enter your check out Date(click the calendar icon)");
  return false;
  }
}
</script>
<script type="text/javascript">
function validateForm1()
{
var a=document.forms["contact"]["name"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter your Name");
  return false;
  }
var b=document.forms["contact"]["email"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter your Email");
  return false;
  }
var c=document.forms["contact"]["message"].value;
if (c==null || c=="")
  {
  alert("Pls. Enter your Message");
  return false;
  }
var atpos=b.indexOf("@");
var dotpos=b.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=b.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
</script>


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
                            <div class="description text-center">
<p>The development of the Ocean Green Beach Villa’s Project sitgoogle mapse in Prampram was  born out of the need by the promoters to utilize their collective experience in developing a unique energy efficient, eco friendly, uniquely designed and beautifully landscaped beach front “Paradise” for people of discerning taste, the recognition by the promoters of the lack of secure leisure recreational villa homes and the opportunity available to fill that market</p>                  </div>
                        </div>
                    </div>

                      <div class="reservation">
      <div align="center" style="padding-top: 7px; font-size:24px;"><strong>RESERVATION</strong></div>
    <div align ="center" style="margin-top: 14px;">
    <form method="post" action="selectroom.php" name="index" onsubmit="return validateForm()">
  
      <label style="margin-left: 8px;">Start Date : </label>
     <input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="start" id="sd" value="" maxlength="10" readonly />
      <br>
     <label style="margin-left: 15px;">End Date : </label>
      <input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="end" id="ed" value="" maxlength="10" readonly />
      <br>
      <label style="margin-left: 45px;">Adult : </label>
      <select name="adult" class="ed" >
        <option>1</option>
        <option>2</option>
        <option>3</option>
      </select>
      <br>
      <label style="margin-left: 44px;">Child : </label>
      <select name="child" class="ed">
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
      </select>
      <br>
      <input name="" type="submit" value="Check Availability" id="button" />
  </form>
    <div align="center"><br />
      <a rel="facebox" href="modifyindex.php">Modify</a>  <a href="cancelindex.php">Cancel</a>  </div>
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

