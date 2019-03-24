<?php

//Dieses File beinhaltet die Verbind8ungsdaten der DB
  function dbconnect() {
    $host = "mdm2016.bbz.cloud"; //Selbsterklärend
    $port = 21;
    $database = "d_php_intro";
    $username = "mdm2016d";
    $password = "e0ba21337840eecef285844f892946f7";

    $db = mysqli_connect($host, $username, $password, $database, $port);
    if (!$db) {
      die("Connection failed: " . mysqli_connect_error()); // Fehlermeldung an
    }

    return $db;
  }
  ?>
