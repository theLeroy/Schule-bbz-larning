<?php
  function dbconnect() {
    $host = "mdm2016.bbz.cloud";
    $port = 21;
    $database = "d_php_intro";
    $username = "mdm2016d";
    $password = "e0ba21337840eecef285844f892946f7";
  
      // Verbindung erstellen:
      // mysqli_connect(Host-Namen, DB-Username, DB-Passwort, Datenbank, Port)
      //   Datenbank: gibt an, auf welcher Datenbank die SQL Queries ausgeführt werden sollen
      //   Host:      gibt an, wo die Datenbank ist, Entweder IP-Adresse oder URL
      //   Port:      Eine Nummer die angibt, an welchen Dienst die Anfrage auf dem Server weitergeleitet
      //              werden soll.
      //              Metapher: Wenn der Host die Adresse eines Hauses ist, ist der Port die Etage, auf
      //              der sich eine Wohnung befindet.
    $db = mysqli_connect($host, $username, $password, $database, $port);
      // Wenn die Verbindung nicht erfolgreich war (Kein internet):
      //    sterben! (die) -> alles weitere der Seite wird nicht mehr angezeigt!
    if (!$db) {
      die("Connection failed: " . mysqli_connect_error()); //mysqli_connect_error() zeigt Fehlermeldung an
    }

    return $db;
  }
  ?>