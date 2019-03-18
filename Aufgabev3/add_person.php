<?php
require_once('dbconnect.php');
$db = dbconnect();

$name = $_POST['name'];
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
        );";

/** wenn das array direkt verwendet wird, müssen die verschiedenen Textteile mit einem '.' verbunden werden:
 * 
  $sql = "INSERT INTO persons (name, vorname, strasse, nummer, PLZ) "
  . "VALUES ("
  . "'" . $_POST['name'] . "', "
  . "'" . $_POST['vorname'] . "', "
  . "'" . $_POST['strasse'] . "', "
  . $_POST['nummer'] . ", "
  . $_POST['PLZ']
  . ");";
 * 
 */

mysqli_query($db, $sql);
mysqli_close($db);
  
header('Location: index.php');
?>
