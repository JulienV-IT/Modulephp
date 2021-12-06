<?php 
    require 'Voiture.php';

     $voiture = new Voiture(17000, TRUE, 'bleu', 1, 'coupé', 300, True);

     print_r($voiture);

     $voiture->modifier_prix(15000); 

     $voiture->modifier_vitesse(90);
     
     $voiture->modifier_klaxon(false);
     print_r($voiture);
    
    if($voiture->klaxon){
        echo('Pouet Pouuuueeeettt !'); 
        }
        else {
           echo('Le silence est d or');
        }
?>