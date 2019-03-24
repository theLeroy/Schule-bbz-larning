<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/css/Main.css">
  
</head>

<body>
  <?php
    require_once('dbconnect.php');
    $db = dbconnect();
    $id = $_POST['ID'];
    $sql = "SELECT * FROM persons WHERE id=$id";
    $result = mysqli_query($db, $sql);
    $person = mysqli_fetch_array($result);

    $name = $person['name'];
    $vorname = $person['vorname'];
    $strasse = $person['strasse'];
    $nummer = $person['nummer'];
    $plz = $person['PLZ'];

  ?>




  <h1>"Person bearbeiten"</h1>
  <form action="update_person.php" method="POST">
    <label>Name</label><br>
    <input name="name" type="text" value="<?php echo($name); ?>"><br>
    <label>Vorname</label><br>
    <input name="vorname" type="text" value="<?php echo($vorname); ?>"><br>
    <label>Strasse</label><br>
    <input name="strasse" type="text" value="<?php echo($strasse); ?>"><br>
    <label>Nummer</label><br>
    <input name="nummer" type="number" value="<?php echo($nummer); ?>"><br>
    <label>PLZ</label><br>
    <input name="plz" type="number" value="<?php echo($plz); ?>"><br>
    <button type="submit" name="id" value="<?php echo($id); ?>">Speichern</button>
  </form>
</body>

</html>
