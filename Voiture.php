<?php   
     require 'Vehicule.php';
     class Voiture extends Vehicule
     {   

          protected $prix; //On souhaite que les classes qui en héritent puissent y accéder  
          private $climatisation; 

          public function __construct(int $prix_vehicule, bool $clim)   
          {   
               $this->prix = $prix_vehicule;   
               $this->climatisation = $clim;
          }

          /**   
          * Cette méthode permet de modifier le prix du véhicule
          */   

          public function modifier_prix(int $nouveau_prix)   
          {   
               $this->prix = $nouveau_prix;   
          }  
     } 
?>