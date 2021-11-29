<?php


include_once 'array.php';
require_once 'variable.php';



$var1 = 10;
$var2 = 20;
$var3 = 30;
$var4 = 40;
$var5 = 50;

$talbecommand = array(1,1,1,1,1);

$arraytest=array($var1, $var2, $var3, $var4, $var5);

function runTable($arraytest,$talbecommand,$item){
    $var6 =60;
    switch ($item)
    {
        // case ($talbecommand[$item]==1):
        case 0:
            for($i=0;$i<count($arraytest);++$i){
                   echo $arraytest[$i];
            }
        ?>
        <br>
        <?php
        break;
        case 1:
            for($i=4;$i>=0;--$i){
                    echo $arraytest[$i];
            }
        ?>
        <br>
        <?php
            break;
        case 2:
            for($i=0;$i < count($arraytest);++$i){

                echo $arraytest[array_rand($arraytest)];
            }
        ?>
        <br>
        <?php
            break;
        case 3:
              array_push($arraytest, $var6);
              for($i=0;$i<count($arraytest);++$i){
                echo $arraytest[$i];
         }
         ?>
         <br>
         <?php
        break;
        case 4:
              unset($arraytest[4]);
              for($i=0;$i<count($arraytest);++$i){
                echo $arraytest[$i];
              }
        ?>
        <br>
        <?php
        break;
        default:
    }
}

function parcours($arraytest,$talbecommand){
    /*foreach($talbecommand as $item){
        runTable($arraytest,$talbecommand,$item);
    }*/
    for($i=0;$i<count($arraytest);$i=$i+1)
    {
        if($talbecommand[$i]==1){
            runTable($arraytest,$talbecommand,$i);
        }
    }
}

parcours($arraytest,$talbecommand);

?>
