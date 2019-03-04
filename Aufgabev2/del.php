<?php
equire 'dbConnection.php'; // Läd das File

echo "string";
$sql = "DELETE form persons where id = ".$_POST['id'].""; //Sql abfrage -> bestimmt was pasiert
$result = mysqli_query($conn, $sql);



 ?>
