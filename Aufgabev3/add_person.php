<?php
require_once('dbconnect.php'); //import db verbingung
$db = dbconnect(); //Verbinde db

$name = $_POST['name']; //Paramterter von vorheriger seite. bzw formular
$vorname = $_POST['vorname'];
$strasse = $_POST['strasse'];
$nummer = $_POST['nummer'];
$plz = $_POST['PLZ'];

$sql = "INSERT INTO persons (name, vorname, strasse, nummer, PLZ)
        VALUES (
          '$name',
          '$vorname',
          '$strasse',
          $nummer,
          $plz
        );"; //SQL Sting für die abfrage


mysqli_query($db, $sql); //Abfrage ausfühern
mysqli_close($db); //trennt die Verbingung

header('Location: index.php');
?>
