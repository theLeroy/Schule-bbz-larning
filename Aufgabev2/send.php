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
 echo $_POST["name"];
 echo $_POST["vorname"];

$name = mysqli_real_escape_string($conn, $_POST["name"]);
$vorname = mysqli_real_escape_string($conn, $_POST["vorname"]);
$PLZ = mysqli_real_escape_string($conn, $_POST["PLZ"]);
$strasse = mysqli_real_escape_string($conn, $_POST["strasse"]);
$nummer = mysqli_real_escape_string($conn, $_POST["nummer"]);

$sql = "INSERT INTO persons (name, vorname, PLZ, nummer, strasse) VALUES ('". $vorname ."', '". $name ."', '". $PLZ ."', '".$nummer."', '". $strasse. "')";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}



mysqli_close($conn);
 ?>
