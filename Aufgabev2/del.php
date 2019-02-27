<?php
equire 'dbConnection.php'; // Läd das File

$sql = "DELETE form persons wehre id = ".$_POST['id'].""; //Sql abfrage -> bestimmt was pasiert
$result = mysqli_query($conn, $sql);

mysqli_close($conn);

 ?>
