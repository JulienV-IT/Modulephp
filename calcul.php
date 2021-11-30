<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="#" >
        <input type="number" name="n1">
        <select name="op" >
                <option value="plus">+</option>
                <option value="moins">-</option>
                <option value="multiplication">*</option>
                <option value="division">/</option>
        </select>
        <input type="number" name="n2">
        <input type="submit" value="Calculer">
        </form>


        <?php
        	$n1=$_POST['$n1'];
        	$op=$_POST['$op'];
        	$n2=$_POST['$n2'];

          if(($n1 !== null) && ($n2!==null)){

          // if(undefined($n1)){$n1 = 0}
          // if(undefined($op)){$op = "plus"}
          // if(undefined($n2)){$n2 = 0}

          echo($n1.' '.$op.' '.$n2);

        }

        // if(isset($op)){
        //     echo("Resultat du calcul ".$n1.$op.$n2." : ");
        //     if($op = "plus"){
        //         var_dump($op);
        //     } elseif($op = "moins") {
        //         var_dump($op);
        //     } elseif($op = "multiplication") {
        //         var_dump($op);
        //     } else($op = "division"){
        //         var_dump($op);
        //     }
        // }
        ?>
        </body>
        </html>
