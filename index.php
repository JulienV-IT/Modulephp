<?php

// echo "welcome to crud json using php <br>";





// le groupe stockage fournit un fichier structurer  en json

// le groupe CRUD récupere le fichier json et le lis (ouvrir le fichier et le parcourir)

// transformer les données json du fichier en données php manipulable (json_decode)

// avec php ouvrir le fichier ne mode ecriture  fwrite

// avec php créer un tableau de variables a encoder en json

// ecrire dnas le fichier notre tableau créer précédement

date_default_timezone_set("India/Mumbai");
echo date_default_timezone_get();
echo " ".date("H:i:s");



$dubaidate = date("H:i:s\eTZ");
var_dump($dubaidate);


$newhourphp = array("fuseau" => "GMT+4", "heure" => "19;16"); // reunion en php
$encodednewhour = json_encode($newhourphp);
// var_dump($encodednewhour);




///create -------------------------------
$jsonhour = fopen("hour.json", "w");



/// READ ---------------------------------
$jsonhour =file_get_contents('hour.json', "r");
$hour = json_decode($jsonhour, true);
echo $hour["heures"];
echo $hour["fuseau"];
echo "\r\n";
echo $hour["heure"];


///update -------------------------------

///delete -------------------------------




?>
