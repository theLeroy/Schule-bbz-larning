<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formular</title>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
  <body>
<?php
require 'dbConnection.php'; // Läd das File

$sql = "SELECT * FROM persons"; //Sql abfrage -> bestimmt was pasiert
$result = mysqli_query($conn, $sql);

echo '<table style="width:100%">';
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
        echo "<td>" . $row["vorname"]. "</td><td>" . $row["name"]. "</td><td>" . $row["PLZ"]. "</td><td>" . $row["strasse"]. "</td><td>" . $row["nummer"]. "</td>";
      echo "</tr>";
    }
} else {
    echo "0 results";
}

echo '</table>';
mysqli_close($conn);

 ?>
  </body>
</html>
