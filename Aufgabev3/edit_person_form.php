<!DOCTYPE html>
<html>
<head>
  <style>
  @import url('https://fonts.googleapis.com/css?family=Roboto+Mono:400,700');
    body {
      padding: 40px;
      color: red;
      font-family: 'Roboto Mono', monospace;
      font-size: 0.8em;
    }
    form {
      border: 3px solid red;
      padding: 20px;
      width: 60%;
      font-size: 1.2em;
    }
    input[type=text], input[type=number] {
      border: none;
      border-bottom: 3px solid red;
      display: block;
      width: calc(100% - 20px);
      padding: 10px;
      outline: none;
      font-family: 'Roboto Mono', monospace;
      font-size: 1.2em;
      font-weight: bold;
      color: red;
    }
    input[type=text]:focus, input[type=number]:focus {
      background-color: red;
      color: white;
    }
    input[type=number] {
      width: 20%;
    }
    button[type=submit] {
      background-color: red;
      border: 3px solid red;
      padding: 40px 20px;
      font-family: 'Roboto Mono', monospace;
      color: white;
      font-size: 1.2em;
      font-weight: bold;
      text-transform: uppercase;
      outline: none;
    }
    button[type=submit]:hover, input[type=submit]:focus {
      color: red;
      background-color: white;
      cursor: pointer;
    }
    ::selection {
      color: white;
      background-color: blue;
    }

  </style>
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
