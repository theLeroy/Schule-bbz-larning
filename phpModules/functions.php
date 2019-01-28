<?php
 ini_set('display_errors', 'On'); ini_set('html_errors', 0); error_reporting(-1);

 $host = "mdm2016.bbz.cloud";
 $port = 21;
 $database = "d_php_intro";
 $username = "mdm2016d";
 $password = "e0ba21337840eecef285844f892946f7";
 $conn = mysqli_connect($host, $username, $password, $database, $port);
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }


?>
