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
        echo "<td>" . htmlspecialchars($row["vorname"]). "</td><td>" . htmlspecialchars($row["name"]). "</td><td>" . htmlspecialchars($row["PLZ"]). "</td><td>" . htmlspecialchars($row["strasse"]). "</td><td>" . htmlspecialchars($row["nummer"]). "</td><td><a href='./del.php?id=".htmlspecialchars($row["id"])."'>🗑</a></td>";
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
