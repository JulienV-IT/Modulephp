<?php
  // $varint = 10;
  // $varchar = "welcome to the dev stage";
  // $varbool = true;
  // $varar = array($varint, $varchar, $varbool);
  // $arraytest = array($var1, $var2, $var3, $var4, $var5 );
  //
  // function iterArray($array){
  //   foreach($array as $x => $val){
  //     echo gettype($val)."<br>";
  //   }
  // }
  //
  // function checkvar($var){
  //   echo gettype($var)."<br>";
  // }
  //
  // checkvar($varchar);
  // checkvar($varint);
  // checkvar($varbool);
  //
  // iterArray($varar);
?>




<?php
$nom = "Vaupré"; // variable locale
$prenom = "Julien"; // variable locale
$age = "220"; // variable locale
$utilisateur = array ($nom, $prenom); // tableau de variable locale



function addElement(){
  global $nom, $prenom, $age, $utilisateur;
  echo ("Le tableau avant l'ajout: <br>");
  foreach($utilisateur as $x => $val){
    echo $val."<br>";
  }
  array_push($utilisateur, $age);
  echo "<br>";
  echo ("Le tableau aprés l'ajout: <br>");
  foreach($utilisateur as $x => $val){
    echo "<strong>".$val."<br>";
  }
}
addElement();



?>
