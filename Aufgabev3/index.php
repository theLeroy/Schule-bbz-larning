<!DOCTYPE html>
<html>

<head>
  <?php require_once('dbconnect.php'); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>

  @import url('https://fonts.googleapis.com/css?family=Roboto+Mono:400,700');

    body {
      padding: 6px 40px 40px 40px;
      color: red;
      font-family: 'Roboto Mono', monospace;
    }
    #rapper {
      border-collapse: collapse;
      width: 60%;
      text-align: left;
    }
    #rapper td, #rapper th {
      border: 1px solid red;
      padding: 8px;
    }
    #rapper th {
      padding-top: 12px;
      padding-bottom: 12px;
      background-color: red;
      color: white;
      text-transform: uppercase;
    }
    #rapper tr:nth-child(even){background-color: #ffeaea;}
    #rapper tr:hover {background-color: #ffc6c6;}
    .new-person {
      color: white;
      background-color: red;
      padding: 10px;
      font-weight: bold;
      text-decoration: none;
      display: inline-block;
      margin: 20px 0;
      border: 3px solid red;
    }
    .new-person:hover {
      background-color: white;
      color: red;
    }
    ::selection {
      background-color: blue;
      color: white;
    }
    .loeschen {
      text-align: center;
    }
    .loeschen button {
      text-decoration: none;
      color: red;
      font-weight: bold;
      display: block;
      border: none;
      background-color: rgba(255,255,255,0);
      padding: 20px;
      width: 100%;
      height: 100%;
    }
    .loeschen:hover button {
      background-color: red;
      cursor: pointer;
      color: white;
    }

  </style>
</head>


<body>
  <h1>"Sicke Rapper"</h1>
  <a class="new-person" href='new_person_form.html'>Neue Person erfassen</a>
  <h2>Liste</h2>
  <form method="post">
  <table id="rapper" border="1">
    <tr>
      <th>ID</th>
      <th>Vorname</th>
      <th>Name</th>
      <th>Strasse</th>
      <th>Nummer</th>
      <th>PLZ</th>
      <th>Ortsname</th>
      <th>Löschen</th>
      <th>Bearbeiten</th>
    </tr>
    <?php
    $db = dbconnect();
    $result = mysqli_query($db, "SELECT * FROM persons;");
    if ($result) {
      while ($person = mysqli_fetch_array($result)) {
          // Bspw.:
          // $person = ['id' => 1, 'Name' => 'Muster', 'Vorname' => 'Mark', 'Strasse' => 'Random', 'Nummer' => 13, 'PLZ' => 3000]
        ?>

          <tr>
            <td> <?php echo ($person['id']); ?> </td>
            <td> <?php echo ($person['name']); ?> </td>
            <td> <?php echo ($person['vorname']); ?> </td>
            <td> <?php echo ($person['strasse']); ?> </td>
            <td> <?php echo ($person['nummer']); ?> </td>
            <td> <?php echo ($person['PLZ']); ?> </td>
            <td> <?php

            $ortsname = "SELECT name FROM ortschaften WHERE PLZ=3145";

            require_once('dbconnect.php');
            $db = dbconnect();


            mysqli_query($db, $ortsname);

            echo ($ortsname)?></td>

            <td class="loeschen"><button formaction="delete_person.php" value="<?php echo ($person['id']); ?>" name="ID">x</button></td>
            <td class="loeschen"><button formaction="edit_person_form.php" value="<?php echo ($person['id']); ?>" name="ID">✒</button></td>
          </tr>
        <?php

      }
    } else {
      echo ("NO DATA!");
    }
    mysqli_close($db);
    ?>
  </table>
</form>

  <br />
  <br />
  <br />

</body>

</html>
