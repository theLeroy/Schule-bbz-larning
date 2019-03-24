<?php
require_once('dbconnect.php'); //import db verbingun
$db = dbconnect(); //verbindet db
$id = $_POST['ID'];
$sql = "DELETE FROM persons WHERE id=$id"; //Sql Sting
mysqli_query($db, $sql); //Sql Abfrage
mysqli_close($db); //trennt die verbindugn
header('Location: index.php'); // weiterleiten auf die seite index.php
?>
