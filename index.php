<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Personen</title>
  </head>
  <body>
    <h1>Personen</h1>
    <?php
      require('phpModules/functions.php');

       $result = mysqli_query($conn, "SELECT * FROM persons;");

       $row = mysqli_fetch_array($result, MYSQLI_NUM);
       print_r($row);

     ?>

     <?php
     $days = ["Mo", "Di", "Mi", "Do", "Fr", "Sa", "So"];
     foreach ($days as $key => $value) {
       echo "<div>".$value."</div>";
     }
      ?>
  </body>
</html>
