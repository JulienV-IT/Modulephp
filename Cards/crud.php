<?php

// echo "welcome to crud json using php <br>";





// le groupe stockage fournit un fichier structurer  en json

// le groupe CRUD récupere le fichier json et le lis (ouvrir le fichier et le parcourir)

// transformer les données json du fichier en données php manipulable (json_decode)

// avec php ouvrir le fichier ne mode ecriture  fwrite

// avec php créer un tableau de variables a encoder en json

// ecrire dnas le fichier notre tableau créer précédement

// date_default_timezone_set("India/Mumbai");
// echo date_default_timezone_get();
// echo " ".date("H:i:s");



// $dubaidate = gmdate("H:i:s T P");
// var_dump($dubaidate);


// $newhourphp = array("fuseau" => "GMT+4", "heure" => "19;16"); // reunion en php
// $encodednewhour = json_encode($newhourphp);
// var_dump($encodednewhour);

// "Id": "1",
//             "Continent": "Afrique",
//             "Pays": "Côte d'Ivoire",
//             "Code_Pays": "ci",
//             "Ville": "Abidjan",
//             "Horaire": "04:49 PM Mon - Nov 29 - 2021",
//             "GMT": " GMT",
//             "Decalage": "00.00",
//             ";": ";"



include 'nav.php';
/// READ --------------------------------
$fushor = file_get_contents('timezone.json');
$horaire = json_decode($fushor);
// var_dump($fushor);
$i = 0;
foreach($horaire as $key => $val){
        
        foreach($val as $key => $item){
        $ville = $item -> Ville;
        $Continent = $item -> Continent;
        $Pays = $item -> Pays;
        $Code_Pays = $item -> Code_Pays;
        $Horaire = $item -> Horaire;
        $GMT = $item -> GMT;
        $Decalage = $item -> Decalage;

        if ($i == 3) break;
        $i++;
?>

                <div class="flex-row">

                        <div class="card m-4">
                        <img src="../h240/<?= $Code_Pays; ?>.png" alt="flag" style="width:100%">
                        <h1><?= $Continent; ?></h1>
                        <p class="title"><?= $Pays; ?></p>
                        <p><?= $ville; ?></p>
                        <button type="button" class="btn btn-secondary btn-lg">Horaires</button>
                        </div> 

                </div>



<?php

   }
}

include 'footer.php';

?>



<?php
// ///create -------------------------------




//   $jsonhour = fopen("hour.json", "w");




///update -------------------------------

///delete -------------------------------

?>

