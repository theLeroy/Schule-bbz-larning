<?php
require_once('dbconnect.php');
$db = dbconnect();
$id = $_POST['ID'];
$sql = "DELETE FROM persons WHERE id=$id";
mysqli_query($db, $sql);
mysqli_close($db);
header('Location: index.php'); // weiterleiten auf die seite index.php
?>
