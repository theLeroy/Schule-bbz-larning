<?php

$id = $_POST['id'];
$name = $_POST['name'];
$vorname = $_POST['vorname'];
$strasse = $_POST['strasse'];
$nummer = $_POST['nummer'];
$plz = $_POST['plz'];

//Sql Sting
$sql = "UPDATE persons
       SET name='$name',
           vorname='$vorname',
           strasse='$strasse',
           nummer=$nummer,
           plz=$plz

       WHERE id = $id;"
       ;

       require_once('dbconnect.php');
       $db = dbconnect();


       mysqli_query($db, $sql); //Sql Abfrage

       $resultat = mysqli_query($db, $sql);
       if(!$resultat){
         die(mysqli_error($db));
       };

       mysqli_close($db); //trennen der verbingung

       header('Location: index.php');



?>
