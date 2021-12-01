<?php

var_dump($_POST);
$nom = $_POST['nom'];
$firstname = $_POST['fisrtname'];
$age = $_POST['age'];
$ville = $_POST['ville'];


// if(isset($nom) && isset($firstname) && isset($age) && isset($ville)){
if(($nom == null) && ($firstname == null) && ($age == null) && ($ville == null)){
  echo (" y'a une couille dans le paté");

} else {
  echo("Les champs sont remplit");
}

?>
