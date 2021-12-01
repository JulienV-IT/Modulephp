<?php

    // ON récupère l'information du select
  $user=$_GET["user"];
   
  try {
    // On se connecte à MySQL
    $nouvelleConnexion = new PDO('mysql:host=localhost;dbname=ajax_exemple;charset=utf8', 'root', '');
}
catch(Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
  
    // On prépare la requète et on l'exécute
  $sqlQuery = 'SELECT * FROM `user` WHERE id = "'.$user.'"';
  $userStatement = $nouvelleConnexion->prepare($sqlQuery);
  $userStatement->execute();
  $user = $userStatement->fetchAll();
   

    // On affiche le haut du tableau
  echo "<table class='table table-dark table-hover'>
  <tr>
  <th scope='col'>#</th>
  <th>Prénom</th>
  <th>Nom</th>
  <th>Age</th>
  <th> Ville </th>
  <th>Emploi</th>
  </tr>";
   
    // On affiche chaque élément du user un à un
    foreach ($user as $user) {
    
    echo "<tr class='table-primary'><th scope='row'>" . $user['ID'] . "</th>";
    echo "<td>" . $user['Prenom'] . "</td>";
    echo "<td>" . $user['Nom'] . "</td>";
    echo "<td>" . $user['Age'] . "</td>";
    echo "<td>" . $user['VilleNatale'] . "</td>";
    echo "<td>" . $user['Emploi'] . "</td>";
    echo "</tr>";
    }

    // On ferme le tableau
  echo "</table>";
