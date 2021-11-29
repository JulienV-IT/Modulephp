
<!-- A faire

-  jouer avec les variables :

    - 3 var de types differents
    - récuperer le type de vos variables
    - modifier une variable de type string ("chaine de charactere") ex: remplacer toutes les majs par des mins

- jouer avec les tableaux:

    - déclarer un tableaux: 1 vide et un avec du contenu
    - lire le tableau en partant du premier élément ainsi qu'en partant du derniers
    - mélanger votre tableau (randomisation)
    - retirer ajouter un élement dans le tableau


exemple: 

 -->




<?php
$fruitpourris = "citron moisi";

$fruits = array("bananes","pommes","kiwis",$fruitpourris,"litchies","groseilles");

foreach($fruits as $i => $val){
  echo "l'index du fruit est:<br> ".$i." <br> et a la valeur: <br>".$val."<br>";

}


echo $fruits[2];

?>
