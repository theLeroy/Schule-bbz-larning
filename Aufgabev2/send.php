<?php

require 'dbConnection.php'; // Läd das File

$name = mysqli_real_escape_string($conn, $_POST["name"]); //Escape um sql injectons zu umgehen
$vorname = mysqli_real_escape_string($conn, $_POST["vorname"]);
$PLZ = mysqli_real_escape_string($conn, $_POST["PLZ"]);
$strasse = mysqli_real_escape_string($conn, $_POST["strasse"]);
$nummer = mysqli_real_escape_string($conn, $_POST["nummer"]);

$sql = "INSERT INTO persons (name, vorname, PLZ, nummer, strasse) VALUES ('". $vorname ."', '". $name ."', '". $PLZ ."', '".$nummer."', '". $strasse. "')"; //Sql abfrage -> bestimmt was pasiert
if(mysqli_query($conn, $sql)){
    echo "<h1>es het klappet!<h1>"; //Feedback
} else { //Error handling
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);

 ?>
