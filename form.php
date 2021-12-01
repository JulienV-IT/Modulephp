


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>
<form id="formed" method="POST" action="">
  <label>Nom</label>
    <input type="text" id="nom" name="nom" placeholder="entrez votre nom"></input>
    <br>
  <label>Prénom</label>
  <input type="text"  id="firstname" name="firstname" placeholder="entrez votre prénom"></input>

  <br>
  <label>age</label>
  <input type="number" id="age" name="age" placeholder="entrez votre age"></input>

  <br>
  <label>ville</label>
  <input type="text" id="ville" name="ville" placeholder="entrez votre ville"></input>


  <button type="submit">Clique dont!!!!</button>
</form>


<div style="border: 2px solid red; display:flex; justify-content: center;" id="response" class="container"><?php require 'data.php'; ?></div>



<section>

  <?php

  $jsonhour = readfile('hour.json');
  var_dump(json_decode($jsonhour));



  ?>


</section>



<script type="text/javascript">
console.log(jQuery().jquery);
$(document).ready(function(event){

  $.ajax({
    type: 'POST',
    url: 'data.php',
    donnee: $(this).serialize()
  })

  .done(function(donnee){
    console.log(donnee);
    $('#response').html(donnee);
  })

  .fail(function(){
    alert("something wrong.....");
  });
  returns false;

  });




</script>


<body></html>
