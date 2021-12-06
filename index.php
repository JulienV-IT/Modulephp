<?php
include 'heures.php';
echo "welcome to class php <br>";




// le groupe stockage fournit un fichier structurer  en json

// le groupe CRUD récupere le fichier json et le lis (ouvrir le fichier et le parcourir)

// transformer les données json du fichier en données php manipulable (json_decode)

// avec php ouvrir le fichier ne mode ecriture  fwrite

// avec php créer un tableau de variables a encoder en json

// ecrire dnas le fichier notre tableau créer précédement

// date_default_timezone_set("India/Mumbai");
// echo date_default_timezone_get();
// echo " ".date("Hpublic:i:s");

// $code = $hour["code"];

// $dubaidate = gmdate("H:i:s T P");
// var_dump($dubaidate);


// $newhourphp = array("fuseau" => "GMT+4", "heure" => "19;16"); // reunion en php
// $encodednewhour = json_encode($newhourphp);
// var_dump($encodednewhour);

// echo "<img src=https://flagcdn.com/16x12/".$code.".png>";


///create -------------------------------
// $jsonhour = fopen("hour.json", "w");



/// READ ---------------------------------
// $jsonhour =file_get_contents('hour.json', "r");
// $hour = json_decode($jsonhour, true);



///update -------------------------------

///delete -------------------------------
$actual =  date("H:m:s d m Y");
//
//
$allTime = new Heures();
$allTime->get_All_Time();



// $setFuz = new Heures();
// var_dump($setFuz);
// $setFuz->set_fuseau("GMT+4");
//
// $getFuz = new Heures();
// $getFuz->get_fuseau();
//
// $sethour = new Heures();
// $sethour->set_heure("13:55",);
//
// $gethour = new Heures();
// var_dump($gethour->get_heure(););
//
//
// $sessionset = new Heures();
// $sessionset->set_session($_SESSION);

// algo de detection de system et de machine







?>

<!DOCTYPE html>
<html>
  <head>
  <style type="text/css">

    .heure{
      margin: 60px;
    }


    .person {
      width: 190px;
      height: 370px;
      margin: 60px;
      background: url("https://1.bp.blogspot.com/-wOr3u-Ch-90/XSkZGkQzQiI/AAAAAAAAFF8/egAXtj3rguAuel6_rb82EeqglZcsUEZbQCLcBGAs/s320/front.png") no-repeat;
      float: left;
    }
    .person:hover {
      background: url("https://1.bp.blogspot.com/-nGvhJ1mpOcg/XSkZR_ZzTkI/AAAAAAAAFGA/bTd4mJ_Kss0AM--6Q3F666eSDeuGcZ86QCLcBGAs/s320/back.png") no-repeat;
    }
  </style>
  </head>
  <body>
    <div class="person"></div>
    <div class="heure">
      <ul>
        <li>EXEMPlE: </li>
        <li>CE genre de truc bizarre</li>
        <li><?= $actual; ?></li>
      </ul>

    </div>
  </body>
</html>
