<?php 
     class Vehicule 
     { 
          /** 
          * Déclaration des attributs 
          */ 
          public $couleur;
          public $niveau_carburant; 
          public $type; 
          public $vitesse;
          public $klaxon;

          // constructeur
          // public function __construct(int $prix, string $couleur, int $niv_carburant, string $type, int $vitesse, bool $klaxon) 
          public function __construct(string $couleur, int $niv_carburant, string $type, int $vitesse, bool $klaxon)
          { 
               //$this->prix= $prix;
               $this->couleur = $couleur;
               $this->niveau_carburant = $niv_carburant; 
               $this->type = $type;
               $this->vitesse = $vitesse;
               $this->klaxon = $klaxon;
          } 

          public function modifier_carburant(int $niveau) 
          { 
               $this->niveau_carburant = $niveau; 
          }

          public function modifier_vitesse(int $vitesse) 
          { 
               $this->vitesse = $vitesse; 
               
          } 

          public function modifier_klaxon(bool $klaxon) 
          { 
               $this->klaxon = $klaxon; 
          } 
     } 
?>