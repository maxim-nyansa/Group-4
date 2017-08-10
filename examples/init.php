<?php
 define('HOST','localhost');
 define('USER','root');
 define('PASS','realer');
 define('DB','oceangreen');
 
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
?>