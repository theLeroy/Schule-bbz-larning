<!DOCTYPE html>
<html>

<head>
  <?php require_once('dbconnect.php'); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>


<body>
  <h1>"Tierquäler"</h1>
  <a class="new-person" href='new_person_form.html'>Neue Person erfassen</a>
  <h2>Liste</h2>
  <form method="post">
  <table id="mc" border="1">
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
