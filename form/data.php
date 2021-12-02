<?php


$nom = $_POST['nom'];
$firstname = $_POST['firstname'];
$age = $_POST['age'];
$ville = $_POST['ville'];




if((empty($nom)) && (empty($firstname)) && (empty($age)) && (empty($ville))){
  echo (" les champs sont vide ou quelques choses c'est mal passer");

} else {
  echo("Les champs sont remplit");
?>

<div class="w3-quarter">
      
      <h3><?= $nom; ?></h3>
      <p><?= $firstname; ?></p>
      <p><?= $age; ?></p>
      <p><?= $ville; ?></p>
</div>

<?php

}


?>
