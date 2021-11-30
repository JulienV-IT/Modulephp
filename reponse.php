<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>
Test Formulaire PHP
</title>
</head>
<body>
<h1>Bonjour,  <?php echo $_GET['nom'] ?></h1>
<h2>Vous semblez avoir  <?php echo $_GET['age'] ?></h2>
   <?php
    $n = $_GET['nom'];
    $a = $_GET['age'];
    ?>

if (!= gettype($n)<>

Votre nom est stocké dans la variable $n
dont le type est <?php echo gettype($n) ?>

Votre âge est stocké dans la variable <b>$a</b>
<br/> dont le type est <i><?php echo gettype($a); ?></i>
<br/> On peut la transformer en <i>integer</i> en faisant :
   <?php settype($a,"integer"); ?>
<br/>
    Type de $a :<?php echo gettype($a); ?>
</body>

</html>
