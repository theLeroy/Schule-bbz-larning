<?php
require 'dbConnection.php'; // Läd das File

$sql = "SELECT * FROM persons where id = ".$_GET['id'].""; //Sql abfrage -> bestimmt was pasiert
$result = mysqli_query($conn, $sql);

echo '<table style="width:100%">';
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<input type='text' value='" .htmlspecialchars($row["vorname"]). "'>";
        echo "<input type='text' value='" .htmlspecialchars($row["name"]). "'>";
        echo "<input type='number' value='" .htmlspecialchars($row["PLZ"]). "'>";
        echo "<input type='text' value='" .htmlspecialchars($row["strasse"]). "'>";
        echo "<input type='number' value='" .htmlspecialchars($row["nummer"]). "'>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

 ?>
